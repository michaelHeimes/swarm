<?php
/**
 * Template name: Select Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */

get_header();
$fields = get_fields();
?>
	<div class="content theme-yellow">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header hero text-center has-bg">
						<div class="bg hex hero-bg-hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);">
							<div class="bg bg-gradient gradient-top"></div>
						</div>
						
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

						<div class="has-bg">
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
						</div>
						
						<div class="has-bg">
							<?php if( !empty($fields['cta_background_image']) ):?>
							<div class="bg bg-gradient gradient-top"></div>
							<?php endif;?>
							<div class="bg bg-gradient gradient-bottom"></div>
							<?php 
								if( !empty( $fields['image_copy'] ) ) {
									get_template_part('template-parts/content', 'image-copy',
										array(
											'image_copy' => $fields['image_copy'],
										)
									);
								}
							?>
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