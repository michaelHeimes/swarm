<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swarm
 */

?>

				<footer id="colophon" class="site-footer black-bg">
					<div class="grid-container">
						<div class="inner grid-x grid-padding-x">
							<div class="cell small-12 medium-auto">
								<div class="footer-links-wrap">
									<?php swarm_footer_links();?>
								</div>
								<?php get_template_part('template-parts/content', 'social-links');?>
								<div class="btn-wrap">
									<?php 
									$link = get_field('subscribe_link', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
							</div>
							<div class="cell small-12 medium-shrink">
								<div class="pc-link-wrap">
								
									<?php 
									$link = get_field('parent_company_link', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="pc-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<span class="show-for-sr"><?php echo esc_html( $link_title ); ?></span>
									<?php endif;?>
									<?php if( !empty( get_field('footer_logo', 'option') ) ) {
										$imgID = get_field('footer_logo', 'option')['ID'];
										$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
										$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
										echo '<div class="img-wrap">';
										echo $img;
										echo '</div>';
									}?>
									<?php if( $link ):?>
										</a>
									<?php endif;?>
									<div><small class="white-color uppercase">Powered By 3STEP Sports</small></div>
								</div>
							</div>
							<div class="cell small-12 text-center">
								<div class="site-info">
									<small class="white-color">Copyright  &copy; <?php echo date("Y");?>, 3STEP Sports. All Rights Reserved.</small>
								</div>
							</div>
						</div>
					</div>
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
