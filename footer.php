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
							<div class="footer-links-wrap cell small-12 medium-auto grid-x">
								<?php swarm_footer_links();?>
							</div>
							<div class="cell small-12 hide-for-tablet">
								<div class="socials-wrap grid-x grid-padding-x align-middle">
									<div class="cell shrink white-color">
										Socials:
									</div>
									<div class="cell shrink tablet-auto">
										<?php swarm_social_links();?>
									</div>
								</div>
							</div>
							
							<div class="pc-link-wrap cell shrink">
								<div class="hide-for-tablet btn-wrap">
									<a class="button white" href="#">Subscribe</a>
								</div>
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
								<div class="hide-for-tablet"><small class="white-color uppercase">Powered By 3STEP Sports</small></div>
							</div>
						</div>
					</div>
					
					<div class="site-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell auto show-for-tablet">
									<div class="socials-wrap grid-x grid-padding-x align-middle">
										<div class="cell shrink white-color">
											Socials:
										</div>
										<div class="cell auto">
											<?php swarm_social_links();?>
										</div>
									</div>
								</div>
								<div class="cell small-12 tablet-shrink">
									<small class="white-color">Copyright  &copy; <?php echo date("Y");?>, 3STEP Sports. All Rights Reserved.
									<?php 
									$link = get_field('privacy_policy', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										- <a class="pp-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
									</small>
								</div>
								<div class="cell small-12 tablet-auto text-right">
									<small class="white-color uppercase show-for-tablet">Powered By 3STEP Sports</small>
									
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
