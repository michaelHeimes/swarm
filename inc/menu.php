<?php
// Register menus
register_nav_menus(
	array(
		'main-nav'		=> __( 'The Main Menu', 'swarm' ),
		'locations-nav'		=> __( 'The Locations Menu', 'swarm' ),
		'locations-page-nav'		=> __( 'The Locations On-page Menu', 'swarm' ),
		// 'offcanvas-nav'	=> __( 'The Off-Canvas Menu', 'swarm' ),
		'footer-links'	=> __( 'Footer Links', 'swarm' ),
		'social-links'	=> __( 'Social Links', 'swarm' ),
	)
);


// The Top Menu
function swarm_top_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> '',					// Adding custom nav id
		'menu_class'		=> 'main-nav medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion tablet-dropdown" data-submenu-toggle="true" data-hover-delay="200" data-closing-time="200">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker(),
		'link_before'    => '<span>',
		'link_after'     => '</span>'	
	));
}

// The Location Menu
function swarm_locations_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> '',					// Adding custom nav id
		'menu_class'		=> 'locations-nav tablet-horizontal accordion-menu menu display-on-load',	// Adding custom nav class
		'items_wrap'		=> '<ul class="%1$s %2$s" data-hover-delay="0" data-closing-time="0" style="visibility: hidden;" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'locations-nav',					// Where it's located in the theme
		'depth'				=> 4,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker(),
		'link_before'    => '<span>',
		'link_after'     => '</span>'	
	));
}

// The Location On-page Menu
function swarm_locations_page_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> '',					// Adding custom nav id
		'menu_class'		=> 'locations-page-nav medium-horizontal menu display-on-load',	// Adding custom nav class
		'items_wrap'		=> '<ul class="%1$s %2$s" data-responsive-menu="accordion" data-hover-delay="0" data-closing-time="0" style="visibility: hidden;">%3$s</ul>',
		'theme_location'	=> 'locations-page-nav',					// Where it's located in the theme
		'depth'				=> 4,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker(),
		'link_before'    => '<span>',
		'link_after'     => '</span>'	
	));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

// The Off Canvas Menu
function swarm_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> '',					// Adding custom nav id
		'menu_class'		=> 'offcanvas-nav menu align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

// The Footer Menu
function swarm_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> '',		// Adding custom nav id
		'menu_class'		=> 'footer-links menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */

// The Social Links Menu
function swarm_social_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> '',		// Adding custom nav id
		'menu_class'		=> 'social-links menu',				// Adding custom nav class
		'theme_location'	=> 'social-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Social Links Menu */

// Header Fallback Menu
function swarm_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'		=> true,
		'menu_class'	=> '',		// Adding custom nav class
		'include'		=> '',
		'exclude'		=> '',
		'echo'			=> true,
		'link_before'	=> '',		// Before each link
		'link_after'	=> ''		// After each link
	));
}

// Footer Fallback Menu
function swarm_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );


// Add ACF Fields to Main Nav

	function my_wp_nav_menu_objects( $items, $args ) {
		
		// var_dump($args);
		
		if ( $args->theme_location == 'location-nav') {
		
			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('location_badge', $item);
				$size = 'full';						
				// append icon
				if( $icon ) {
					
					$item->title = '<span class="icon-title-wrap grid-x flex-dir-column align-middle align-center"><span class="icon" aria-hidden="true"><img src="' . $icon['url'] . '" alt="' . $icon['alt'] . '"></span><span class="title">' . $item->title . '</span></span>';
					
				}
				
			}
			
						
			// return
			return $items;		
			
		}
			
		elseif ( $args->theme_location == 'social-links') {
			
			// loop
			foreach( $items as &$item ) {
				
				// vars
				$icon = get_field('icon', $item);
				$size = 'full';						
				// append icon
				if( $icon ) {
					
					$item->title = '<span class="icon" aria-hidden="true"><img class="style-svg" src="' . $icon['url'] . '" alt="' . $icon['alt'] . '"></span><span class="show-for-sr"' . $item->title . '</span>';
					
				}
				
			}
			
			// return
			return $items;		

		} else {			
			// loop
			foreach( $items as &$item ) {}
			return $items;	
		}
		
	}
	
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);