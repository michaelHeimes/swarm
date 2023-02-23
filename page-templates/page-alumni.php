<?php
/**
 * Template name: Alumni Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */
 
get_header();
 $fields = get_fields();
 ?>
	<div class="content">
		<div class="inner-content">
		
			<main id="primary" class="site-main">
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header text-center has-bg">
						<div class="bg bg-gradient gradient-top"></div>
						<div class="bg hex hero-bg-hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
						<div class="grid-container relative">
							<div class="grid-x grid-padding-x align-bottom">
								<div class="cell">
									<h1 class="white-color">
										<?php if( !empty( $fields['alternative_banner_heading'] ) ):?>
											<?php echo $fields['alternative_banner_heading'];?>
										<?php else:?>
											Swarm <?php the_title();?>
										<?php endif;?>
									</h1>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				
					<div class="entry-content">
					
						<?php			
						$args = array(  
						'post_type' => 'alumni_post',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						);
						
						$loop = new WP_Query( $args ); 
						
						if ( $loop->have_posts() ) :?>
							<section class="alumni">
							<div class="grid-container">
							
								<div class="grid-x grid-padding-x">
									<div class="cell small-12">
									<div class="staff-cards grid-x grid-padding-x align-center">
								
										<?php while ( $loop->have_posts() ) : $loop->the_post();
											$theme_color = 	get_field('theme_color');	
											$photo = get_field('photo');
											$team = get_field('team');
											$team_logo = get_field('team_logo');
										?>
										
											
										<div class="staff-card cell small-12 tablet-6 xlarge-4 grid-x align-center">
											<div class="inner grid-x">
												
												<div class="left cell shrink">
													<div class="grid-x flex-dir-column align-justify h-100">
														<div>
															<h3 class="name uppercase"><?php the_title();?></h3>
															<?php if( !empty($team) ):?>
																<h5 class="text-gray uppercase job-title"><?php echo $team;?></h5>
															<?php endif;?>
														</div>
														
														<?php if( !empty( $team_logo ) ) {
															$imgID = $team_logo['ID'];
															$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
															$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "full", "alt"=>$img_alt] );
															echo '<div class="img-wrap">';
															echo $img;
															echo '</div>';
														}?>
														
													</div>
												</div>
												<div class="right cell auto">
													<div class="red-hex-img-wrap hex-img-wrap display-on-image-load">
														<?php if( !empty( $photo ) ) {
															$imgID = $photo['ID'];
															$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
															$img = wp_get_attachment_image( $imgID, 'staff-photo', false, [ "class" => "", "alt"=>$img_alt] );
															echo '<div class="hex-img">';
															echo $img;
															echo '</div>';
														}?>
														<?php if( $theme_color == 'blue' ):?>
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
													  		<defs>
																<linearGradient id="linear-gradient-blue" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
														  		<stop offset="0" stop-color="#62c6f2"/>
														  		<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
																</linearGradient>
													  		</defs>
													  		<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-blue)"/>
															</svg>
														<?php endif;?>
														<?php if( $theme_color == 'red' ):?>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
												  		<defs>
															<linearGradient id="linear-gradient-red" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
													  		<stop offset="0" stop-color="#c00"/>
													  		<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
															</linearGradient>
												  		</defs>
												  		<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-red)"/>
														</svg>
														<?php endif;?>
														<?php if( $theme_color == 'yellow' ):?>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
												  		<defs>
															<linearGradient id="linear-gradient-yellow" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
													  		<stop offset="0" stop-color="#FDD81D"/>
													  		<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
															</linearGradient>
												  		</defs>
												  		<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-yellow)"/>
														</svg>
														<?php endif;?>
													</div>
												</div>
											
											</div>
										</div>
		
								
										<?php endwhile;?>
								
									</div>
						<?php endif;?>
								
								</div>
							</div>
						</section>
						<?php wp_reset_postdata(); ?>
					
					</div><!-- .entry-content -->
					
					<footer class="entry-footer">
					
					</footer><!-- .entry-footer -->
					
				</article><!-- #post-<?php the_ID(); ?> -->
			
			</main><!-- #main -->
		
		</div>
	</div>
 
 <?php
 get_footer();