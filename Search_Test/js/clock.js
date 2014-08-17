function updateClock() {
	var currentTime = new Date ();
	var currentHours = currentTime.getHours ();
	var currentMinutes = currentTime.getMinutes ();
	var currentSeconds = currentTime.getSeconds ();

	currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
	currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

	var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;

	$("#clock").html(currentTimeString);
}
$(document).ready(function() {
	if(settings.clock.showClock) {
		// Add empty '#clock' div
		$('body').append('<div id="clock"></div>');

		// Update clock
		setInterval('updateClock()', 1000);
	}
});