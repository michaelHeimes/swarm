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
						'post_type' => 'swarm_staff',
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
								
										<?php $i = 1; while ( $loop->have_posts() ) : $loop->the_post();
											$bio_card = get_field('bio_card');
											
											$theme_color = get_field('theme_color');
											$name = get_the_title();	
											$photo = $bio_card['photo'];
											$title = $bio_card['title'];
											$bio = $bio_card['bio'];	
											
										$args = array(
												'theme_color' => $theme_color,
												'photo' => $bio_card['photo'],
												'name' => $name,
												'title' => $title,
												'bio' => $bio,
												'row' => $i,
											);

										get_template_part('template-parts/loop', 'staff-card', $args);
	
										$i++; endwhile;?>
								
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