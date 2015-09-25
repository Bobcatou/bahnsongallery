<?php

//* Force full width content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

remove_action( 'genesis_loop', 'genesis_do_loop' );

//*Move Main Nav above image
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_content_sidebar_wrap', 'genesis_do_nav' );


//* Home Image of Gallery
add_action('genesis_before_content_sidebar_wrap', 'lwm_home_gallery_image');
	function lwm_home_gallery_image () {
	echo '<div class="gallery_home_image">';			
	echo '<img src="http://www.listentothewindmedia.com/dev/bahnsengallery-v1/wp-content/themes/bahnsengallery/images/bahnsen_gallery_home_1600px.jpg">';
	echo '</div>'; 
}



//* Hooks Featured Products widget. (Above Footer area)
add_action( 'genesis_before_content', 'lwm_featured_items', 15 );
	function lwm_featured_items() {
	echo '<div class="lwm_featured_block-row1">';
	echo '<div class="wrap lwm_featured_samples">';
	echo '<h2>Featured Artwork</h2>';
		genesis_widget_area( 'lwm_featured-row1', array(
			'before' => '<div class="lwm_special_items">',
			'after' => '</div>',	) );
	echo '</div>';
	echo '</div>';

}

//* Hooks Featured Products widget. (Above Footer area)
add_action( 'genesis_before_content', 'lwm_featured_items_row2', 15 );
	function lwm_featured_items_row2() {
	echo '<div class="lwm_featured_block-row2">';
	echo '<div class="wrap lwm_featured_samples-row2">';
	echo '<h2>Recently Arrived Artwork</h2>';
		genesis_widget_area( 'lwm_featured-row2', array(
			'before' => '<div class="lwm_special_items-row2">',
			'after' => '</div>',	) );
	echo '</div>';
	echo '</div>';

}





//* Third Row Widgets Left and Right
add_action( 'genesis_before_content', 'lwm_third_row_content', 15 );
	function lwm_third_row_content() {
	echo '<div class="lwm_third_row_block">';
	echo '<div class="wrap third_row_widgets">';
		genesis_widget_area( 'lwm_featured-row3_left', array(
			'before' => '<div class="lwm_3row_left">',
			'after' => '</div>',
	) );
			genesis_widget_area( 'lwm_featured-row3_right', array(
			'before' => '<div class="lwm_3row_right">',
			'after' => '</div>',
	) );
	echo '</div>';
	echo '</div>';  
}




//* Run the Genesis loop
genesis();

