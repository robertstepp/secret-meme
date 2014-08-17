/* Settings *\
\*==========*/



function searchBox(url, name, placeholder) {
	var string = '<form method="get" action="' + url + '">'
	           + '<input type="text" id="g" name="' + name + '" placeholder="' + placeholder + '" maxlength="255" value="">'
	           + '<input type="submit" value="Go">'
	           + '</form>';
	return string;
}

$(document).ready(function() {

	var shortcuts = {};
	
	/*  Get Links  *\
	\*=============*/
	var linkString = $('body').text();

	/*  Clear Page  *\
	\*==============*/
	$('body').empty();

	/*  Create Array from linkString  *\
	\*================================*/
	var linkArray = linkString.split("\n");

	/*  Go thru Array  *\
	\*=================*/
	var i;
	var count = 1;
	var html = '';

	

	/*  Add generated content to page  *\
	\*=================================*/
	html = html + '</ul></div>';
	$('body').append(html);


	/*  Animation Time!  *\
	\*===================*/
	
	/*  Hide lists  *\
	\*==============*/
	$('ul').slideUp();

	/*  Show on hover  *\
	\*=================*/
	$('.block').mouseenter(function() {
		$('ul', this).slideDown();
	});

	/*  Hide on unhover  *\
	\*===================*/
	$('.block').mouseleave(function() {
		$('ul', this).slideUp();
	});


	/*  Search Engines  *\
	\*==================*/

	var search = '<div id="searches">';

	for (var i = 0; i < settings.search.engines.length; i++) {
		var engine = settings.search.engines[i];
		search = search + searchBox(engine[0], engine[1], engine[2]);
	}

	search = search + '</div>';

	/*  Add to page  *\
	\*===============*/
	$('body').append(search);
	if(settings.search.focusSearch) {
		var searchDiv = document.getElementById ('searches');
		$(searchDiv.firstChild.firstChild).focus();
	}
 
	/*  Clock  *\
	\*=========*/

	


	/*  Keybindings  *\
	\*===============*/

	var typed = '';
	var shortcutArray = Object.keys(shortcuts);
		
	// Check if we typed a keybinding
	function hasSubstring(element) {
		var index = typed.indexOf(element);
		if(index >= 0) {
			var sliced = typed.slice(index, typed.length);
			typed = ''; // Clean typed, so that we can watch for the next keybinding
			if(settings.navigation.newWindow) {
				window.open(shortcuts[sliced]);
			} else {
				window.location.replace(shortcuts[sliced]);
			}
		}
	}

	// React on keypress
	$(window).keypress(function(e) {
		
		// If we're in an input, we don't want to interpret the keypresses
		$('input').keypress(function(e) {
			e.stopPropagation();
		});
		
		// Keep track of pressed keys
		typed = typed + e.key;


		shortcutArray.some(hasSubstring);
	});

});
