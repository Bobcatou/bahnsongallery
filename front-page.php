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


//* Recent Art
add_action( 'genesis_before_content', 'recent_art', 20 );
	function recent_art() {
	echo '<div class="lwm_recent_art">';
	echo '<div class="wrap recent_art_area">';
		genesis_widget_area( 'home_front_recent_art', array(
			'before' => '<div class="recent_art_home">',
			'after' => '</div>',
	) );

}


//* Hooks Widgets for Recent Art 3 widgeth section
add_action( 'genesis_before_content', 'lwm_recent_items', 9 );
	function lwm_recent_items() {
	echo '<div class="lwm_recent_items_block">';
	echo '<div class="wrap lwm_recent_samples">';
    echo '<h2>Recent Items</h2>';

		genesis_widget_area( 'lwm_recent_column_one', array(
			'before' => '<div class="demos_column1">',
			'after' => '</div>',
	) );
			genesis_widget_area( 'lwm_recent_column_two', array(
			'before' => '<div class="demos_column2">',
			'after' => '</div>',
	) );
			genesis_widget_area( 'lwm_recent_column_three', array(
			'before' => '<div class="demos_column3">',
			'after' => '</div>',
	) );
			genesis_widget_area( 'lwm_recent_column_four', array(
			'before' => '<div class="demos_column4">',
			'after' => '</div>',
	) );
	
	echo '</div>';
	echo '</div>';  
}




//* Run the Genesis loop
genesis();

