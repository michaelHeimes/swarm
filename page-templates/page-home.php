<?php
/**
 * Template name: Home Page
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
				
					<header class="entry-header hero text-center has-bg">
						<div class="bg hex hero-bg-hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
						
						<!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/hero-hex.svg);"> -->


									<?php 
									$image = $fields['hero_image'];
									if( !empty( $image ) ): ?>
										<div class="bg img" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
										<!-- <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
									<?php endif; ?>

						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 relative">
									<div class="hero-heading grid-x align-bottom">
										<div class="cell small-12">
											<h1 class="white-color"><?php echo $fields['hero_heading_line_one'];?><br><span><?php echo $fields['hero_heading_line_two'];?></span></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</header><!-- .entry-header -->
				
					<div class="entry-content home" itemprop="text">
						
						<section class="copy-three-image-set">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-middle">
									<div class="copy-wrap cell small-12 tablet-6 large-5">
										<?php echo $fields['ctis_copy'];?>
										<?php 
										$link = $fields['ctis_button_link'];
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
										<div class="btn-wrap">
											<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										</div>
										<?php endif; ?>
									</div>
									<div class="cell small-12 tablet-6 large-6 large-offset-1">
										<div class="three-image-set grid-x grid-padding-x align-middle fixed-width-half">
											<div class="left cell small-6">
												<?php 
												$image = $fields['ctis_red_background_image'];
												if( !empty( $image ) ): ?>
												<div class="red-hex-img-wrap hex-img-wrap">
													<div class="hex-img red-img">
				
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
									  				<defs>
														<linearGradient id="ctis_red_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
										  				<stop offset="0" stop-color="#c00"/>
										  				<stop offset="0.216" stop-color="#e5403b"/>
										  				<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
														</linearGradient>
									  				</defs>
									  				<path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(#ctis_red_linear-gradient)"/>
													</svg>
												</div>
												<?php endif; ?>
											</div>
											
											<div class="right cell small-6">
												<?php 
												$image = $fields['ctis_yellow_background_image'];
												if( !empty( $image ) ): ?>
												<div class="yellow-hex-img-wrap hex-img-wrap">
													<div class="hex-img yellow-img">
												
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
									  				<defs>
														<linearGradient id="ctis_yellow_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
										  				<stop offset="0" stop-color="#fdd81d"/>
										  				<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
														</linearGradient>
									  				</defs>
									  				<path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(#ctis_yellow_linear-gradient)"/>
													</svg>
				
												</div>
												<?php endif; ?>
				
												<?php 
												$image = $fields['ctis_blue_background_image'];
												if( !empty( $image ) ): ?>
												<div class="blue-hex-img-wrap hex-img-wrap">
													<div class="hex-img blue-img">
												
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
									  				<defs>
														<linearGradient id="ctis_blue_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
										  				<stop offset="0" stop-color="#62c6f2"/>
										  				<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
														</linearGradient>
									  				</defs>
									  				<path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(#ctis_blue_linear-gradient)"/>
													</svg>
				
												</div>
												<?php endif; ?>		
											</div>						
										</div>
									</div>
								</div>
							</div>
						</section>
						
						<section class="locations has-bg">
							<div class="bg hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
							<div class="grid-container relative">
								<div class="grid-x grid-padding-x align-center text-center">
									<div class="cell small-12 tablet-6">
										<?php if( !empty( $fields['locations_heading'] ) ):?>
											<h2 class="white-color"><?php echo $fields['locations_heading'];?></h2>
										<?php endif;?>
										<?php if( !empty( $fields['locations_text'] ) ):?>
											<p class="white-color"><?php echo $fields['locations_text'];?></p>
										<?php endif;?>
									</div>
									<div class="cell small-12">
										<?php if( !empty( $fields['locations_map_image'] ) ) {
											$imgID = $fields['locations_map_image']['ID'];
											$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
											$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
											echo '<div class="img-wrap">';
											echo $img;
											echo '</div>';
										}?>
										<div class="on-page-locations-wrap text-left">
											<div class="hide-for-tablet grid-x align-center">
												<button class="button white" data-toggle="on-page-locations-dropdown">
													<div class="grid-x align-middle">
														<span>Team Locations</span>
														<svg xmlns="http://www.w3.org/2000/svg" width="14.107" height="9.142" viewBox="0 0 14.107 9.142"> <path id="Path_1172" data-name="Path 1172" d="M879.509,3104.144l6,5.962,6-5.962" transform="translate(-878.451 -3103.08)" fill="none" stroke="#000" stroke-width="3"/></svg>
													</div>
												</button>
												<div class="dropdown-pane text-center" id="on-page-locations-dropdown" data-position="bottom" data-alignment="center" data-dropdown data-auto-focus="true">
													<div class="white-bg">
														<?php swarm_mobile_locations_nav(); ?>
													</div>
												</div>
											</div>
											<div class="show-for-tablet">
												<?php swarm_locations_nav(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
												
						<?php 
							if( !empty($fields['cta_background_image']) ) {
								$cta_bg_img = $fields['cta_background_image'];
								get_template_part('template-parts/content', 'cta-background-image',
									array(
										'cta_bg_img' => $cta_bg_img,
									)
								);
							}
						?>

						<section class="testimonials-slider-section relative">
							<div class="grid-container">
								<div class="grid-x grid-padding-x relative align-middle">
									<div class="cell small-12 tablet-6">
										<?php if ($testimonial_slides = $fields['testimonials_slider']):?>
										<div id="testimonials-img-slider" class="overflow-hidden">
											<div class="swiper-wrapper">
												<?php foreach($testimonial_slides as $testimonial_slide):?>
												<div class="cell swiper-slide">
													<div class="photo-wrap">
														<?php 
														$image = $testimonial_slide['photo'];
														if( !empty( $image ) ): ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
												</div>
												<?php endforeach;?>
											</div>
										</div>
										<?php endif;?>
									</div>
										
									<div class="cell small-12 tablet-6 large-5 large-offset-1">
										<?php if( !empty( $fields['testimonials_header'] ) ):?>
											<h2><?php echo $fields['testimonials_header'];?></h2>
											<svg width="49" height="44" xmlns="http://www.w3.org/2000/svg"><text transform="translate(-5 -29)" fill="#212020" fill-rule="nonzero" font-family="GoodHeadlinePro-NarrBold, Good Headline Pro" font-size="212" font-weight="bold"><tspan x="0" y="179">“</tspan></text></svg>
										<?php endif;?>
										<?php if ($testimonial_slides = $fields['testimonials_slider']):?>
										<div id="testimonials-text-slider" class="overflow-hidden">
											<div class="swiper-wrapper">
												<?php foreach($testimonial_slides as $testimonial_slide):?>
												<div class="cell swiper-slide">
													<div class="inner">
														<?php if( !empty($testimonial_slide['quote']) ):?>
															<p class="quote">
																<?php echo $testimonial_slide['quote'];?>
															</p>
														<?php endif;?>
														<?php if( !empty($testimonial_slide['name']) ):?>
															<p class="name">
																<i>– <?php echo $testimonial_slide['name'];?></i>
															</p>
														<?php endif;?>
													</div>
												</div>
												<?php endforeach;?>
											</div>
											<div class="testimonials-text-swiper-pagination text-right"></div>
										</div>
										<?php endif;?>
									</div>
								</div>
							</div>
						</section>
						
					</div> <!-- end article section -->
							
					<footer class="article-footer">
						<?php get_template_part('template-parts/content', 'prefooter');?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();