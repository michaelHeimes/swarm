<?php
/**
 * Template name: Location Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */

get_header();

$fields = get_fields(get_queried_object());

?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header home-banner text-center">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h2>Upcoming Events</h2>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				
					<div class="entry-content" itemprop="text">
						
						<?php
							$today = date('Ymd');
							
							$args = array(
								'post_type' => 'event',
								'posts_per_page' => -1,
								// 'orderby' => 'meta_value',
								// 'meta_query' => array(
								// 	array(
								// 		'key' => 'event_post_expiration',
								// 		'value' => $today,
								// 		'compare' => '>',
								// 	),
								// ),
								'order' => 'ASC',
							
							);
							$loop = new WP_Query($args);
							
							if ( $loop->have_posts() ) :?>
								<section class="events">
									<div class="grid-container">
										<div class="grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
											<?php while ( $loop->have_posts() ) : $loop->the_post();?>
												<article id="post-<?php the_ID(); ?>" <?php post_class('cell'); ?>>
													<?php 
													$image = get_field('image');
													if( !empty( $image ) ): ?>
													<div class="thumb">
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<?php endif; ?>
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
													<div class="btn-link">
														<a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark">Button Text</a>
													</div>
												</article>
											<?php endwhile;?>
										</div>
									</div>
								</section>
							
							<?php endif; wp_reset_postdata(); ?>
	
						<?php get_template_part('template-parts/content', 'image-copy');?>
						
						<section class="our-team">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
										<div class="bio-cards grid-x grid-padding-x align-center small-up-2 medium-up-3">
											<?php 
												$bio_cards = $fields['bio_cards'];
												if( !empty($bio_cards) ):
													$row = 1;
													foreach($bio_cards as $bio_card):
														$bio_card_fields = $bio_card['bio_card'];
						
														$args = array(
															'photo' => $bio_card_fields['photo'],
															'name' => $bio_card_fields['name'],
															'title_&_affiliation' => $bio_card_fields['title_&_affiliation'],
															'bio' => $bio_card_fields['bio'],
															'row' => $row 
														);
						
													get_template_part('template-parts/loop', 'team-card', $args);
						
													$row++; endforeach;
												endif;
											?>
										</div>
									</div>
								</div>
							</div>
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



