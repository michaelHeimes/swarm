<?php
/**
 * Template name: Location Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */

get_header();
global $post;
$page_slug = $post->post_name;
$fields = get_fields();
$theme_color = $fields['theme_color'];
?>
<div class="content theme-<?php echo $theme_color;?>">
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
			
				<div class="entry-content" itemprop="text">
					
					<?php						
						$args = array(
							'post_type' => 'event',
							'posts_per_page' => -1,
							'order' => 'ASC',
							'tax_query' => array(
								array (
									'taxonomy' => 'location',
									'field' => 'slug',
									'terms' => $page_slug,
								)
							),
						);
						$loop = new WP_Query($args);
						
						if ( $loop->have_posts() ) :?>
							<section class="events overflow-hidden has-bg">
								<div class="grid-container">
									<div class="grid-x grid-padding-x">
										<div class="cell small-12">
											<h2>Upcoming Events</h2>
										</div>
									</div>
									<div class="cards-wrap grid-x grid-padding-x small-up-1 medium-up-2 large-up-3">
										<?php while ( $loop->have_posts() ) : $loop->the_post();?>
											<article id="post-<?php the_ID(); ?>" <?php post_class('cell event-card'); ?>>
												<div class="inner">
													<?php 
													$image = get_field('image');
													if( !empty( $image ) ): ?>
													<div class="thumb theme-<?php echo $theme_color;?>">
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<?php endif; ?>
												<div class="text-wrap">
													<div class="grid-x grid-padding-x">
														<div class="cell auto">
															<h3><?php the_title();?></h3>
															<?php if( $date_for_archive_grid = get_field('date_for_archive_grid') ):?>
																<p class="date">
																	<?php echo $date_for_archive_grid;?>
																</p>
															<?php endif;?>
															<?php if( $location = get_field('location') ):?>
																<p class="date">
																	<?php echo $location;?>
																</p>
															<?php endif;?>
														</div>
														<div class="cell shrink">
															<div class="btn-link">
																<a class="button" href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">Learn More</a>
															</div>
														</div>
													</div>
												</div>
											</article>
										<?php endwhile;?>
									</div>
								</div>
								<div class="bg bg-gradient gradient-bottom"></div>
							</section>
						
						<?php endif; wp_reset_postdata(); ?>
					
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
					
					<div class="gradient-section-1 has-bg">
						<div class="bg bg-gradient gradient-top"></div>
					
						<?php 
							if( !empty( $fields['image_copy'] ) ) {
								get_template_part('template-parts/content', 'image-copy',
									array(
										'image_copy' => $fields['image_copy'],
									)
								);
							}
						?>
						
						<section class="our-team">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 text-center">
										<h2>Coaching Staff</h2>
									</div>
									<div class="cell small-12">
										<div class="staff-cards grid-x grid-padding-x">
											<?php 
												$bio_cards = $fields['bio_cards'];
												if( !empty($bio_cards) ):
													$row = 1;
													foreach($bio_cards as $bio_card):
														$bio_card_fields = $bio_card['bio_card'];
						
														$args = array(
															'theme_color' => $theme_color,
															'photo' => $bio_card_fields['photo'],
															'name' => $bio_card_fields['name'],
															'title' => $bio_card_fields['title'],
															'bio' => $bio_card_fields['bio'],
															'row' => $row 
														);
						
													get_template_part('template-parts/loop', 'staff-card', $args);
						
													$row++; endforeach;
												endif;
											?>
										</div>
									</div>
								</div>
							</div>
						</section>
						<div class="bg bg-gradient gradient-bottom"></div>
					</div>
					
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