<?php 
	$image_copy = $args['image_copy'];
	
	$layout = $image_copy['layout'];
	$image = $image_copy['image'];
	$text = $image_copy['text'];
	$buttons = $image_copy['buttons'];
?>

<section class="img-copy-card <?php echo $layout;?>">
	<div class="grid-container">
		<div class="inner grid-x grid-padding-x align-center<?php if($layout == 'image-right'):?> tablet-flex-dir-row-reverse<?php endif;?>">

			<div class="left cell small-12 tablet-6<?php if($layout == 'image-right'):?> large-5 large-offset-1<?php endif;?> grid-x align-center">
				<?php if( !empty( $image ) ) {
					$imgID = $image['ID'];
					$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
					$img = wp_get_attachment_image( $imgID, 'half-container', false, [ "class" => "", "alt"=>$img_alt] );
					echo '<div class="img-wrap">';
					echo $img;
					echo '</div>';
				}?>
			</div>
			<div class="right cell small-12 tablet-6<?php if($layout == 'image-left'):?> large-5 large-offset-1<?php endif;?>  grid-x flex-dir-column align-center">
				<div class="text-btns-wrap">
					<?php if( !empty($text) ):?>
					<div class="text-wrap">
						<?php echo $text;?>
					</div>
					<?php endif;?>
					<?php 
					if( !empty($buttons) ):?>
					<div class="btns-wrap grid-x grid-padding-x">
						<?php foreach($buttons as $button):
							if( $button['button_link'] ):
								$btn_link = $button['button_link'];
								$link_url = $btn_link['url'];
								$link_title = $btn_link['title'];
								$link_target = $btn_link['target'] ? $btn_link['target'] : '_self';
						?>
						<div class="btn-wrap cell shrink">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<span><?php echo esc_html( $link_title ); ?></span>
							</a>
						</div>
					<?php endif;
						endforeach;?>
					</div>
					<?php endif;?>
				</div>
			</div>									
		</div>
	</div>
</section>