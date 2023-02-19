<?php
	$post_type = get_post_type();
	
	$theme_color = $args['theme_color'];
	$row = $args['row'];
	$image = $args['photo'];
	$name = $args['name'];
	$name_slug = slugify($name);
	$title = $args['title'];
	$bio = $args['bio'];
?>
<div <?php if($post_type == 'swarm_staff'):?>id="post-<?php the_ID(); ?>"<?php endif;?> class="staff-card cell small-12 tablet-6 large-shrink xlarge-4 grid-x align-center">
	<div class="inner grid-x">
		
		<?php if( is_page_template('page-templates/page-location.php') ):?>
			<div class="left cell auto">
				<div class="grid-x flex-dir-column align-justify h-100">
					<div>
						<h3 class="h4 uppercase"><?php echo $name;?></h3>
						<?php if( !empty($title) ):?>
							<h5 class="text-gray uppercase"><?php echo $title;?></h5>
						<?php endif;?>
					</div>
				<div class="btn-wrap">
					<button class="staff-modal-trigger" data-open="<?php echo $name_slug;?>">
						<u>Learn More</u>
					</button>
				</div>
				</div>
			</div>
			<div class="right cell shrink">
				<div class="red-hex-img-wrap hex-img-wrap">
					<?php if( !empty( $image ) ) {
						$imgID = $image['ID'];
						$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
						$img = wp_get_attachment_image( $imgID, 'staff-photo', false, [ "class" => "", "alt"=>$img_alt] );
						echo '<div class="hex-img">';
						echo $img;
						echo '</div>';
					}?>
					<?php if( $theme_color == 'blue' ):?>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
					  	<defs>
							<linearGradient id="linear-gradient-blue" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
						  	<stop offset="0" stop-color="#62c6f2"/>
						  	<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
							</linearGradient>
					  	</defs>
					  	<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-blue)"/>
						</svg>
					<?php endif;?>
					<?php if( $theme_color == 'red' ):?>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
				  	<defs>
						<linearGradient id="linear-gradient-red" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
					  	<stop offset="0" stop-color="#c00"/>
					  	<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
						</linearGradient>
				  	</defs>
				  	<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-red)"/>
					</svg>
					<?php endif;?>
					<?php if( $theme_color == 'yellow' ):?>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="220.103" height="190.527" viewBox="0 0 220.103 190.527">
				  	<defs>
						<linearGradient id="linear-gradient-yellow" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
					  	<stop offset="0" stop-color="#FDD81D"/>
					  	<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
						</linearGradient>
				  	</defs>
				  	<path id="Picture17" d="M159.305,0a10,10,0,0,1,8.659,5l49.25,85.264a10,10,0,0,1,0,10l-49.25,85.264a10,10,0,0,1-8.659,5H60.8a10,10,0,0,1-8.659-5L2.889,100.265a10,10,0,0,1,0-10L52.139,5A10,10,0,0,1,60.8,0Z" fill="url(#linear-gradient-yellow)"/>
					</svg>
					<?php endif;?>
				</div>
			</div>
		<?php endif;?>
		
	</div>
</div>

<div class="reveal staff-reveal" id="<?php echo $name_slug;?>" data-reveal data-deep-link="true" data-update-history="true">
	<div class="grid-x align-right">
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<svg xmlns="http://www.w3.org/2000/svg" width="37.973" height="38.615" viewBox="0 0 37.973 38.615">
	  		<g id="Icon_ionic-ios-close-circle-outline" data-name="Icon ionic-ios-close-circle-outline" transform="translate(-0.389 -0.067)">
				<rect id="Rectangle_170" data-name="Rectangle 170" width="37.973" height="38.615" rx="18.986" transform="translate(0.389 0.067)" fill="#019fdb"/>
				<path id="Path_55" data-name="Path 55" d="M26.316,24.289,21.586,19.56l4.729-4.729A1.434,1.434,0,0,0,24.288,12.8l-4.729,4.729L14.829,12.8A1.434,1.434,0,0,0,12.8,14.831L17.53,19.56,12.8,24.289a1.387,1.387,0,0,0,0,2.028,1.425,1.425,0,0,0,2.028,0l4.729-4.729,4.729,4.729a1.441,1.441,0,0,0,2.028,0A1.425,1.425,0,0,0,26.316,24.289Z" transform="translate(-0.181 -0.182)"/>
				<path id="Path_56" data-name="Path 56" d="M19.375,5.529A13.841,13.841,0,1,1,9.583,9.583a13.755,13.755,0,0,1,9.792-4.054m0-2.154a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" fill="#0fa3df"/>
	  		</g>
			</svg>
		</button>
	</div>
	<div class="grid-x align-center">
		<div class="cell">
			<div class="photo-title">
				<div class="grid-x flex-dir-column align-middle">
					<div class="hex-img-wrap relative">
						<?php if( !empty( $image ) ) {
							$imgID = $image['ID'];
							$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
							$img = wp_get_attachment_image( $imgID, 'staff-photo', false, [ "class" => "", "alt"=>$img_alt] );
							echo '<div class="hex-img">';
							echo $img;
							echo '</div>';
						}?>
						<?php if( $theme_color == 'blue' ):?>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="213.801" height="185.072" viewBox="0 0 213.801 185.072">
						  <defs>
						<linearGradient id="linear-gradient-blue" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#62c6f2"/>
							<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
						  </linearGradient>
						  </defs>
						  <path id="Picture17" d="M154.579,0a10,10,0,0,1,8.659,5l47.674,82.536a10,10,0,0,1,0,10l-47.674,82.536a10,10,0,0,1-8.659,5H59.222a10,10,0,0,1-8.659-5L2.889,97.538a10,10,0,0,1,0-10L50.563,5a10,10,0,0,1,8.659-5Z" fill="url(#linear-gradient-blue)"/>
						</svg>

						<?php endif;?>
						<?php if( $theme_color == 'red' ):?>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="213.801" height="185.072" viewBox="0 0 213.801 185.072">
						  <defs>
							<linearGradient id="linear-gradient-red" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
							  <stop offset="0" stop-color="#c00"/>
							  <stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
							</linearGradient>
						  </defs>
						  <path id="Picture17" d="M154.579,0a10,10,0,0,1,8.659,5l47.674,82.536a10,10,0,0,1,0,10l-47.674,82.536a10,10,0,0,1-8.659,5H59.222a10,10,0,0,1-8.659-5L2.889,97.538a10,10,0,0,1,0-10L50.563,5a10,10,0,0,1,8.659-5Z" fill="url(#linear-gradient-red)"/>
						</svg>
						<?php endif;?>
						<?php if( $theme_color == 'yellow' ):?>
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="213.801" height="185.072" viewBox="0 0 213.801 185.072">
						  <defs>
					<linearGradient id="linear-gradient-yellow" x1="0.755" y1="0.051" x2="0.175" y2="0.93" gradientUnits="objectBoundingBox">
							<stop offset="0" stop-color="#FDD81D"/>
							<stop offset="1" stop-color="#fefefe" stop-opacity="0"/>
						  </linearGradient>
						  </defs>
						  <path id="Picture17" d="M154.579,0a10,10,0,0,1,8.659,5l47.674,82.536a10,10,0,0,1,0,10l-47.674,82.536a10,10,0,0,1-8.659,5H59.222a10,10,0,0,1-8.659-5L2.889,97.538a10,10,0,0,1,0-10L50.563,5a10,10,0,0,1,8.659-5Z" fill="url(#linear-gradient-yellow)"/>
						</svg>
						<?php endif;?>
					</div>
					<div class="text-center">
						<h3 class="h4 uppercase"><?php echo $name;?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="grid-x align-center">
		<div class="cell">
			<div class="inner">
				<div class="text-wrap">
					<?php echo $bio;?>
				</div>
			</div>
		</div>
	</div>
</div>