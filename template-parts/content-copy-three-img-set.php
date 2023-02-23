<?php
	$ctis = $args['copy_three-image_set'];
	
	$copy = $ctis['copy'];
	$button_link = $ctis['button_link'];
	$leftmiddle_image = $ctis['leftmiddle_image'];
	$righttop_image = $ctis['righttop_image'];
	$rightbottom_image = $ctis['rightbottom_image'];
	
	$p_select = false;
	
	if( is_page_template('page-templates/page-select.php') ) {
		$p_select = true;
	}
	
	
	
?>
<section class="copy-three-image-set">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="copy-wrap cell small-12 tablet-6 large-5">
				<?php echo $copy;?>
				<?php 
				$link = $button_link;
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<div class="btn-wrap">
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php endif; ?>
			</div>
			<div class="tis-wrap cell small-12 tablet-6 large-6 large-offset-1">
				<div class="three-image-set grid-x grid-padding-x align-middle fixed-width-half">
					<div class="left cell small-6">
						<?php 
						$image = $leftmiddle_image;
						if( !empty( $image ) ): ?>
						<div class="left-middle-hex-img-wrap hex-img-wrap display-on-image-load">
							<div class="hex-img red-img">

								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
							  <defs>
								<linearGradient id="ctis_red_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
								  <stop offset="0" stop-color="#c00"/>
								  <stop offset="0.216" stop-color="#e5403b"/>
								  <stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
								</linearGradient>
							  </defs>
							  <path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(<?php if($p_select){echo '#ctis_yellow_linear-gradient';} else { echo '#ctis_red_linear-gradient';}?>)"/>
							</svg>
						</div>
						<?php endif; ?>
					</div>
					
					<div class="right cell small-6">
						<?php 
						$image = $righttop_image;
						if( !empty( $image ) ): ?>
						<div class="right-top-hex-img-wrap hex-img-wrap display-on-image-load">
							<div class="hex-img yellow-img">
						
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
							  <defs>
								<linearGradient id="ctis_yellow_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
								  <stop offset="0" stop-color="#fdd81d"/>
								  <stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
								</linearGradient>
							  </defs>
							  <path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(#ctis_yellow_linear-gradient)"/>
							</svg>

						</div>
						<?php endif; ?>

						<?php 
						$image = $rightbottom_image;
						if( !empty( $image ) ): ?>
						<div class="right-bottom-hex-img-wrap hex-img-wrap display-on-image-load">
							<div class="hex-img blue-img">
						
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="452.265" height="391.494" viewBox="0 0 452.265 391.494">
							  <defs>
								<linearGradient id="ctis_blue_linear-gradient" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
								  <stop offset="0" stop-color="#62c6f2"/>
								  <stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
								</linearGradient>
							  </defs>
							  <path id="Picture17" d="M321.882,0A30,30,0,0,1,347.86,14.995L443.6,180.742a30,30,0,0,1,0,30.01L347.86,376.5a30,30,0,0,1-25.978,14.995h-191.5A30,30,0,0,1,104.4,376.5L8.667,210.752a30,30,0,0,1,0-30.01L104.4,14.995A30,30,0,0,1,130.383,0Z" fill="url(<?php if($p_select){echo '#ctis_yellow_linear-gradient';} else { echo '#ctis_red_linear-gradient';}?>)"/>
							</svg>

						</div>
						<?php endif; ?>		
					</div>						
				</div>
			</div>
		</div>
	</div>
</section>