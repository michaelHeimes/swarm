<section class="prefooter black-bg">
	<div class="social">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12 medium-shrink">
					<h2 class="h3">Follow Us</h2>
				</div>
				<div class="cell small-12 medium-auto">
					<a href="#" target="_blank">
						<div class="grid-x grid-padding-x align-middle h-100">
							<svg xmlns="http://www.w3.org/2000/svg" width="21.708" height="21.704" viewBox="0 0 21.708 21.704"><path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M10.851,7.525a5.565,5.565,0,1,0,5.565,5.565A5.556,5.556,0,0,0,10.851,7.525Zm0,9.182a3.618,3.618,0,1,1,3.618-3.618,3.624,3.624,0,0,1-3.618,3.618Zm7.09-9.41a1.3,1.3,0,1,1-1.3-1.3A1.295,1.295,0,0,1,17.941,7.3Zm3.685,1.317a6.423,6.423,0,0,0-1.753-4.548,6.465,6.465,0,0,0-4.548-1.753c-1.792-.1-7.163-.1-8.955,0A6.456,6.456,0,0,0,1.824,4.062,6.444,6.444,0,0,0,.071,8.61c-.1,1.792-.1,7.163,0,8.955a6.423,6.423,0,0,0,1.753,4.548,6.473,6.473,0,0,0,4.548,1.753c1.792.1,7.163.1,8.955,0a6.423,6.423,0,0,0,4.548-1.753,6.465,6.465,0,0,0,1.753-4.548c.1-1.792.1-7.158,0-8.95ZM19.312,19.487a3.663,3.663,0,0,1-2.063,2.063c-1.429.567-4.819.436-6.4.436s-4.974.126-6.4-.436a3.663,3.663,0,0,1-2.063-2.063c-.567-1.429-.436-4.819-.436-6.4s-.126-4.974.436-6.4A3.663,3.663,0,0,1,4.454,4.629c1.429-.567,4.819-.436,6.4-.436s4.974-.126,6.4.436a3.663,3.663,0,0,1,2.063,2.063c.567,1.429.436,4.819.436,6.4S19.879,18.063,19.312,19.487Z" transform="translate(0.005 -2.238)" fill="#707070"/></svg>
							<span>#SWARMBB</span>
						</div>
					</a>
				</div>
				<div class="cell small-12 white-color">
					Social Feed
				</div>
			</div>
		</div>
	</div>
	<?php						
	$args = array(
		'post_type' => 'partner',
		'posts_per_page' => -1,
	);
	$loop = new WP_Query($args);
	
	if( !empty(get_field('partners')['partners'] ) ) {
		$partners = get_field('partners')['partners'];
	};
		
	if ( is_front_page() && $loop->have_posts() || !empty($partners) ) :?>
	<div class="partners">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell small-12">
					<h2 class="white-color">Our Partners</h2>
				</div>
				<?php if( is_front_page() ):
					while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="cell small-12 medium-6 xmedium-4 large-3">
						<?php if( !empty( get_field('logo') ) ) {
							$imgID = get_field('logo')['ID'];
							$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
							$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
							echo '<div class="img-wrap">';
							echo $img;
							echo '</div>';
						}?>
					</div>
					<?php endwhile;
				
					else:
						
						
					if( !empty($partners) ): ?>
						<?php foreach( $partners as $post ): 
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
						<div class="cell small-12 medium-6 xmedium-4 large-3">
							<?php if( !empty( get_field('logo') ) ) {
								$imgID = get_field('logo')['ID'];
								$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
								$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
								echo '<div class="img-wrap">';
								echo $img;
								echo '</div>';
							}?>
						</div>
						<?php endforeach; ?>
						<?php 
						wp_reset_postdata();
					endif;
					
				endif;?>
			</div>
		</div>
	</div>
	<?php endif; wp_reset_postdata(); ?>
	
	<hr>
	
</section>