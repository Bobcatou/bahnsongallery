jQuery(document).ready(function($) {

	if (window.innerWidth > 1023) {
		var highestCol = Math.max( $('.content-sidebar .content-sidebar-wrap .content').height(), $('.content-sidebar .sidebar-primary').height() );

		$('.content-sidebar .content-sidebar-wrap .content, .content-sidebar .sidebar-primary').height(highestCol);
	}

});
