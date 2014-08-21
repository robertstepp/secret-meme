function sbox(url,name,placeholder)	{
	var sstring = '<form method="get" action="' + url + '"><input type=text" id="s" name="' + name + '" placeholder="' + placeholder + '" value=""><input type="submit" value ="' + placeholder + ' Search ">';
	return sstring;
}
var search = "";
for (var s = 0; s < settings.search.engine.length; s++) {
	var engine = settings.search.engine[s];
	search = search + sbox(engine[0], engine[1], engine[2]);
}
$(document).ready(function() {
document.getElementById('searchbox').innerHTML=""+search+"";
});