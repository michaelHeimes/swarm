<?php $cta_bg_img = $args['cta_bg_img'];
	$background_image = $cta_bg_img['background_image'];
	$heading = $cta_bg_img['heading'];
	$button_link = $cta_bg_img['button_link'];
?>

<section class="cta-w-bg-img has-object-fit has-bg">
	<?php if( !empty( $background_image ) ) {
		$imgID = $background_image['ID'];
		$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
		$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "object-fit-img", "alt"=>$img_alt] );
		echo $img;
	}?>
	<div class="bg mask"></div>
	<div class="grid-container">
		<div class="inner grid-x grid-padding-x align-middle">
			<div class="cell small-12 text-center">
				<?php if( !empty($heading) ):?>
					<h2 class="white-color"><?php echo $heading;?></h2>
				<?php endif;?>
				<?php 
				$link = $button_link;
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>