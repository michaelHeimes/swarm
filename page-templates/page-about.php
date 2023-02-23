<?php
/**
 * Template name: About Page
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
											<?php the_title();?>
										<?php endif;?>
									</h1>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				
					<div class="entry-content">
					
						<?php 
							if( !empty($fields['copy_three-image_set']) ):?>
							<div class="has-bg">
							<div class="bg bg-gradient gradient-bottom"></div>
								<?php
								$copy_three_image_set = $fields['copy_three-image_set'];
								get_template_part('template-parts/content', 'copy-three-img-set',
									array(
										'copy_three-image_set' => $copy_three_image_set,
									)
								);?>
							</div>
						<?php endif;?>
					
					</div><!-- .entry-content -->
					
					<footer class="entry-footer">
					
					</footer><!-- .entry-footer -->
					
				</article><!-- #post-<?php the_ID(); ?> -->
			
			</main><!-- #main -->
		
		</div>
	</div>
 
 <?php
 get_footer();