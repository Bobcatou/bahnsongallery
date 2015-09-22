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
	echo '<h2>Recent Arrived Artwork</h2>';
		genesis_widget_area( 'lwm_featured-row2', array(
			'before' => '<div class="lwm_special_items-row2">',
			'after' => '</div>',	) );
	echo '</div>';
	echo '</div>';

}




//* Third Row-2 Widget 

//* Hooks both Widgets
//add_action( 'genesis_before_content', 'lwm_featured_items_row3_left', 15 );
//	function lwm_featured_items_row3_left() {
//	echo '<div class="lwm_featured_block-row3_left">';
//	echo '<div class="wrap lwm_featured_samples-row3_left">';
//		genesis_widget_area( 'lwm_featured-row3_left', array(
//			'before' => '<div class="lwm_special_items-row3_left">',
//			'after' => '</div>',	) );
//	echo '</div>';
//	echo '</div>';

//}

//* Hooks both Widgets
//add_action( 'genesis_before_content', 'lwm_featured_items_row3_right', 15 );
//	function lwm_featured_items_row3_right() {
//	echo '<div class="lwm_featured_block-row3_right">';
//	echo '<div class="wrap lwm_featured_samples-row3_right">';
//		genesis_widget_area( 'lwm_featured-row3_right', array(
///			'before' => '<div class="lwm_special_items-row3_right">',
//			'after' => '</div>',	) );
//	echo '</div>';
//	echo '</div>';

//}



//* Third Row Widgets Left and Right
add_action( 'genesis_before_content_sidebar_wrap', 'lwm_third_row_content', 15 );
	function lwm_third_row_content() {
	echo '<div class="lwm_third_row_block">';
	echo '<div class="wrap third_row_widgets">';
		genesis_widget_area( 'lwm_left_two_section_3row', array(
			'before' => '<div class="lwm_3row_left">',
			'after' => '</div>',
	) );
			genesis_widget_area( 'lwm_right_two_section_3row', array(
			'before' => '<div class="lwm_3row_right">',
			'after' => '</div>',
	) );
	echo '</div>';
	echo '</div>';  
}

//* Run the Genesis loop
genesis();

