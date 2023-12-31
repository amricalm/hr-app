$(function() {
	'use strict'
	$('#chatActiveContacts').lightSlider({
		autoWidth: true,
		controls: false,
		pager: false,
		slideMargin: 12
	});

	const ps = new PerfectScrollbar('#ChatList', {
	  useBothWheelAxes:false,
	  suppressScrollY:false,
	});

	const ps1 = new PerfectScrollbar('#ChatBody', {
	  useBothWheelAxes:false,
	  suppressScrollX:false,
	});

	$('[data-bs-toggle="tooltip"]').tooltip();

});