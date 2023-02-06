<?php
function add_custom_sizes() {
	// Team Photos
<<<<<<< HEAD
	//add_image_size( 'team-photo', 300, 300, true );
=======
	add_image_size( 'team-photo', 300, 300, true );
>>>>>>> main
}
add_action('after_setup_theme','add_custom_sizes');