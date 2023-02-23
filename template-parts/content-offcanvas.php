<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://swarm.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas" id="off-canvas" data-off-canvas style="display: none;">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">

				<div class="inner grid-x align-center">
				
					<?php swarm_locations_nav(); ?>
				
					<?php swarm_top_nav();?>
				
					<hr>
					
					<div class="bottom text-center">
				
						<?php swarm_footer_links();?>
						
						<?php get_template_part('template-parts/content', 'social-links');?>
					
	
						<div class="pc-link-wrap grid-x align-center">
							<div class="cell shrink">
								
								<?php 
									$link = get_field('subscribe_link', 'option');
									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
									<div class="btn-wrap">
										<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									</div>
								<?php endif; ?>
								<?php 
								$link = get_field('parent_company_link', 'option');
								if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
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
							</div>
						</div>
						
						<?php 
						$link = get_field('parent_company_link', 'option');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<span class="show-for-sr"><?php echo esc_html( $link_title ); ?></span>
						<?php endif;?>
							<p class="uppercase white-color">Powered By 3STEP Sports</p>
						<?php if( $link ):?>
							</a>
						<?php endif;?>
						
						<p class="site-info"><small class="white-color">Copyright  &copy; <?php echo date("Y");?>, 3STEP Sports. All Rights Reserved.
							<?php 
							$link = get_field('privacy_policy', 'option');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								- <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</small></p>
						
					</div>
								
				</div>
				
			</div>
		</div>
	</div>
</div>
