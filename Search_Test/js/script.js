function searchBox(url, name, placeholder) {
	var string = '<form method="get" action="' + url + '">'
	           + '<input type="text" id="g" name="' + name + '" placeholder="' + placeholder + '" maxlength="255" value="">'
	           + '<input type="submit" value="' + placeholder + ' Search">'
	           + '</form>';
	return string;
}

$(document).ready(function() {

	/*  Clear Page  *\
	\*==============*/
	$('body').empty();


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
 
});
