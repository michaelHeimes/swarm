<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */
 
$fields = get_fields();
 
$terms = get_the_terms( get_the_ID(), 'location' );
 
if ( $terms && ! is_wp_error( $terms ) ) {
	$first_term = reset( $terms );
	$location_name = $first_term->name;
} else {
	$location_name = '';
}

$archive_link = get_term_link($first_term);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="back-wrap cell small-12 text-right">
					<a class="back-link dark-gray-color uppercase h6" href="<?php echo $archive_link;?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="9" height="13.938" viewBox="0 0 9 13.938"><path id="Icon_awesome-angle-left" data-name="Icon awesome-angle-left" d="M2.041,12.975,7.963,7.053a1.041,1.041,0,0,1,1.476,0l.984.984a1.041,1.041,0,0,1,0,1.476l-4.193,4.2,4.2,4.2a1.041,1.041,0,0,1,0,1.476l-.984.988a1.041,1.041,0,0,1-1.476,0L2.045,14.456a1.042,1.042,0,0,1,0-1.48Z" transform="translate(-1.734 -6.746)" fill="#aaa"/></svg>
						<span>Back</span>
					</a>
				</div>
			</div>
			<div class="top grid-x grid-padding-x align-middle">
				<div class="left cell small-12 tablet-6">
					<?php if($location_name):?>
						<h3><?php echo $location_name;?> Swarm</h3>
					<?php endif;?>
					
					<?php the_title( '<h1 class="entry-title h2">', '</h1>' );?>
				
					<?php if( $location = $fields['location'] ):?>
						<div class="location-wrap hide-for-tablet">
							<p><?php echo $location;?></p>
						</div>
					<?php endif;?>
					
				</div>
				<div class="right cell small-12 medium-4 tablet-6 text-right">
					<?php 
						$link = $fields['registration_link'];
						if( $link ): 
					?>
						<a class="button" href="<?php echo esc_url( $link ); ?>" target="_blank">Register</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="bottom grid-x grid-padding-x">
				<div class="left cell small-12 tablet-6">
					
					<?php if( $location = $fields['location'] ):?>
						<div class="location-wrap show-for-tablet">
							<p><?php echo $location;?></p>
						</div>
					<?php endif;?>
					
					<?php if ( $days = $fields['days'] ):?>
						<div class="days">
						<?php foreach( $days as $day ):
							$date_string = $day['date'];
							$date = DateTime::createFromFormat('Ymd', $date_string);
							$times = $day['times'];
						?>
							<div class="day">
								<p class="date"><b><?php echo $date->format('F j, Y'); ?></b></p>
								<div class="times">
									<ul class="no-dots">
									<?php foreach( $times as $time ):?>
										<li><?php echo $time['time'];?></li>
									<?php endforeach;?>
									</ul>
								</div>
							</div>

						<?php endforeach;?>
						</div>
					<?php endif;?>
					
					<?php if($copy = $fields['copy']):?>
						<div class="copy show-for-tablet">
							<?php echo $copy;?>
						</div>
					<?php endif;?>
					
				</div>
				<div class="right cell small-12 tablet-6">
					<?php if( !empty( $fields['image'] ) ) {
						$imgID = $fields['image']['ID'];
						$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
						$img = wp_get_attachment_image( $imgID, 'half-container', false, [ "class" => "", "alt"=>$img_alt] );
						echo '<div class="img-wrap">';
						echo $img;
						echo '</div>';
					}?>
				</div>
				<?php if($copy = $fields['copy']):?>
					<div class="copy cell small-12 hide-for-tablet">
						<?php echo $copy;?>
					</div>
				<?php endif;?>
			</div>
		</div>
	</header><!-- .entry-header -->

</article><!-- #post-<?php the_ID(); ?> -->
