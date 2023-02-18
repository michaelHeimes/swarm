<?php
// This function will check if a page is using the 'page-location' template and ceate a term for the custom taxonomy 'location' using that pages name and slug
function create_location_term() {
	
	if ( 'page-templates/page-location.php' == get_page_template_slug() ) {

		// Get the current page's name and slug
		$name = get_post_field( 'post_title', get_post() );
		$slug = get_post_field( 'post_name', get_post() );
		
		// Check if a term with this slug already exists
		$term = term_exists( $slug, 'location' );
		
		// If the term doesn't exist, create it
		if ( $term === 0 || $term === null ) {
			
			$args = array(
				'description' => '',
				'slug' => $slug
			);
			
			// Insert the term
			wp_insert_term( $name, 'location', $args );
			
		}

	}
	
}
add_action( 'save_post_page', 'create_location_term' );