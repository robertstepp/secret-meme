function sbox(url, name, placeholder) {
	var string = '<form method="get" action="' + url + '" target="_blank">'
	           + '<input type="text" id="g" name="' + name + '" placeholder="' + placeholder + '" maxlength="255" value="">'
	           + '<input type="submit" value="' + placeholder + ' Search">'
	           + '</form>';
	return string;
}
$(document).ready(function() {
var search = "";
for (var i = 0; i < settings.search.engines.length; i++) {
		var engine = settings.search.engines[i];
		search = search + sbox(engine[0], engine[1], engine[2]);
	}
document.getElementById('searchbox').innerHTML=search;
});