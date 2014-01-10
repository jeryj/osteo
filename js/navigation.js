/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */

$(document).ready( function() {
	$('.menu-toggle').click(function() {
		$('.main-navigation').toggleClass('toggled');
	});
});
