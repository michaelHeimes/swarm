<?php
function add_custom_sizes() {
	// Team Photos
	add_image_size( 'staff-photo', 416, 362, true );
	
	// Half width of container
	add_image_size( 'half-container', 1168 );
	
}
add_action('after_setup_theme','add_custom_sizes');