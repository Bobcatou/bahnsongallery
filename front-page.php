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
	echo '<img src="http://localhost/bahnsengallery-v1/wp-content/themes/bahnsengallery/images/Gallery-With-New-Floor-025-126.jpeg">';
	echo '</div>'; 
}




//* Hooks Widgets for Recent Art 4 widget section
//add_action( 'genesis_before_content', 'lwm_recent_items', 9 );
//	function lwm_recent_items() {
//	echo '<div class="lwm_recent_items_block">';
//	echo '<div class="wrap lwm_recent_samples">';
//    echo '<h2>Recent Arrivals</h2>';
//
//		genesis_widget_area( 'lwm_recent_column_one', array(
//			'before' => '<div class="demos_column1">',
//			'after' => '</div>',
//	) );
//			genesis_widget_area( 'lwm_recent_column_two', array(
//			'before' => '<div class="demos_column2">',
//			'after' => '</div>',
//	) );
//			genesis_widget_area( 'lwm_recent_column_three', array(
//			'before' => '<div class="demos_column3">',
//			'after' => '</div>',
//	) );
//			genesis_widget_area( 'lwm_recent_column_four', array(
//			'before' => '<div class="demos_column4">',
//			'after' => '</div>',
//	) );
	
//	echo '</div>';
//	echo '</div>';  
//}

//* Hooks Featured Products widget. (Above Footer area)_
add_action( 'genesis_before_content', 'lwm_featured_items', 20 );
	function lwm_featured_items() {
	echo '<div class="lwm_featured_block">';
	echo '<h2>Recent Arrived Artwork</h2>';
	echo '<div class="wrap lwm_featured_samples">';
		genesis_widget_area( 'lwm_featured', array(
			'before' => '<div class="lwm_special_items">',
			'after' => '</div>',	) );
	echo '</div>';
	echo '</div>';

}




//* Run the Genesis loop
genesis();

