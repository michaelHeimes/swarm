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
				
					<header class="entry-header home-banner text-center">

					</header><!-- .entry-header -->
				
					<div class="entry-content" itemprop="text">
						
						<?php get_template_part('template-parts/content', 'image-copy');?>
						
						<section class="locations">
							<div class="grid-container">
								<div class="grid-x grid-padding-x text-center">
									<div class="cell small-12">
										<?php if( $locations_heading = $fields['locations_heading'] ):?>
											<h2><?php echo $locations_heading;?></h2>
										<?php endif;?>
										MAP HERE
										<?php swarm_location_nav(); ?>
									</div>
								</div>
							</div>
						</section>
						
												
						<section class="locations has-object-fit">
							<?php 
							$image = get_field('cta_background_image');
							if( !empty( $image ) ): ?>
								<img class="object-fit-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<div class="grid-container">
								<div class="grid-x grid-padding-x text-center">
									<div class="cell small-12">
										<?php if( $cta_heading = $fields['cta_heading'] ):?>
											<h2><?php echo $cta_heading;?></h2>
										<?php endif;?>
										<?php if( $cta_text = $fields['cta_text'] ):?>
											<p><?php echo $cta_text;?></p>
										<?php endif;?>
										<?php 
										$link = get_field('cta_button_link');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</section>
						
						<section class="testimonials-slider-section">
							<?php if ($testimonial_slides = $fields['testimonials_slider']):?>
							<div id="testimonials-slider" class="swiper-container relative">
								<div class="swiper-wrapper">
									<?php foreach($testimonial_slides as $testimonial_slide):?>
									<div class="cell swiper-slide">
										<div class="inner">
											<div class="grid-container">
												<div class="grid-x grid-margin-x">
													<div class="cell small-12 tablet-4">
														<div class="photo-wrap">															
															<?php 
															$image = $testimonial_slide['photo'];
															if( !empty( $image ) ): ?>
																<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
															<?php endif; ?>
														</div>
													</div>
													<div class="cell small-12 tablet-8">
														<?php if( !empty($testimonial_slide['quote']) ):?>
															<p class="quote">
																"<?php echo $testimonial_slide['quote'];?>"
															</p>
														<?php endif;?>
														<?php if( !empty($testimonial_slide['name']) ):?>
															<p class="name">
																<?php echo $testimonial_slide['name'];?>
															</p>
														<?php endif;?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach;?>
								</div>
								<button class="swiper-button-prev">
									<svg xmlns="http://www.w3.org/2000/svg" width="51.5" height="103" viewBox="0 0 51.5 103">
									  <g id="Group_76" data-name="Group 76" transform="translate(-51 -4343.303)">
										<path id="Path_736" data-name="Path 736" d="M51.5,0V103a51.5,51.5,0,0,1,0-103Z" transform="translate(51 4343.303)" fill="#efefef" opacity="0.794"/>
										<path id="Path_737" data-name="Path 737" d="M86.7,16741.152l-18.483,18.482,18.483,18.482" transform="translate(1.285 -12365.35)" fill="none" stroke="#019fdb" stroke-width="2"/>
									  </g>
									</svg>
								</button>
								<button class="swiper-button-next">
									<svg xmlns="http://www.w3.org/2000/svg" width="51.5" height="103" viewBox="0 0 51.5 103">
									  <g id="Group_32" data-name="Group 32" transform="translate(102.5 4271) rotate(180)">
										<path id="Path_736" data-name="Path 736" d="M51.5,0V103a51.5,51.5,0,0,1,0-103Z" transform="translate(51 4168)" fill="#efefef" opacity="0.794"/>
										<path id="Path_737" data-name="Path 737" d="M86.7,16741.152l-18.483,18.482,18.483,18.482" transform="translate(1.285 -12540.652)" fill="none" stroke="#019fdb" stroke-width="2"/>
									  </g>
									</svg>
								</button>
							</div>
							<?php endif;?>
						</section>
						
					</div> <!-- end article section -->
							
					<footer class="article-footer">
						 <?php wp_link_pages(); ?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();