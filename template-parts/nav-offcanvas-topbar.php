<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://swarm.com/docs/off-canvas-menu/
 */
?>
<div class="grid-container">

	<div class="top-bar-wrap grid-container fluid">
		<div class="top-bar relative" id="top-bar-menu">
				<div class="top-bar-left float-left">
				
				<div class="site-branding show-for-sr">
					<?php
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$swarm_description = get_bloginfo( 'description', 'display' );
					if ( $swarm_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $swarm_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			
				<ul class="menu">
					<li class="logo"><a href="<?php echo home_url(); ?>">
						<?php 
						$image = get_field('header_logo', 'option');
						if( !empty( $image ) ): ?>
					    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</a></li>
				</ul>
							
			</div>
			<div class="top-bar-right show-for-tablet">
				<div class="grid-x align-right">
					<div class="cell shrink">
						<div class="grid-x align-middle">
							<div class="cell auto">
								<ul class="menu locations-trigger">
									<li>
								<!-- <a id="locations-dropdown" href="#">Locations</a> -->
										<a type="button" data-toggle="header-locations-dropdown" href="#">Locations</a>
									</li>
								</ul>
							</div>
							<div class="cell shrink"><?php swarm_top_nav();?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-toggle-wrap top-bar-right float-right hide-for-tablet">
				<ul class="menu">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
				</ul>
			</div>
			
			<div class="locations-nav-wrap">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="cell small-12">
							<div class="dropdown-pane" id="header-locations-dropdown" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true"  data-hover-delay="0">
								<?php swarm_locations_nav(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

</div>
