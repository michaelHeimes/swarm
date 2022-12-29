<?php
/**
 * Template name: Staff Page
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
				
					<?php get_template_part('template-parts/content-default-banner');?>
				
					<div class="entry-content">
					
					<section class="our-team">
						<div class="grid-container">

							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<?php			
									$args = array(  
									'post_type' => 'swarm_staff',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									);
									
									$loop = new WP_Query( $args ); 
									
									if ( $loop->have_posts() ) :?>
										<div class="staff-cards grid-x grid-padding-x align-center small-up-2 medium-up-3 large-up-4">
									
											<?php while ( $loop->have_posts() ) : $loop->the_post();?>
											
												
												<?php 
													$bio_card = get_field('bio_card');
												
													$args = array(
													'photo' => $bio_card['photo'],
													'name' => $bio_card ['name'],
													'title_&_affiliation' => $bio_card ['title_&_affiliation'],
													'bio' => $bio_card['bio'],
													);
													
													get_template_part('template-parts/loop', 'team-card', $args);
													
												?>
									
											<?php endwhile;?>
									
										</div>
									<?php endif; wp_reset_postdata(); ?>

								</div>
							</div>
						</div>
					</section>
					
					</div><!-- .entry-content -->
					
					<footer class="entry-footer">
					
					</footer><!-- .entry-footer -->
					
				</article><!-- #post-<?php the_ID(); ?> -->
			
			</main><!-- #main -->
		
		</div>
	</div>
 
 <?php
 get_footer();