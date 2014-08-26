function screensize() {
	<!--
		document.location=\"$PHP_SELF?resolution=1&width=\"+window.innerWidth+\"&height=\"+window.innerHeight;
		//--> 
};
window.onload = screensize();
$(window).resize(screensize());