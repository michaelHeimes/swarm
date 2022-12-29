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
				<div class="cell small-12 text-right">
					<a href="<?php echo $archive_link;?>">Back</a>
				</div>
			</div>
			<div class="top grid-x grid-padding-x">
				<div class="left cell small-12 medium-8 tablet-6">
					<?php if($location_name):?>
						<h3><?php echo $location_name;?> Swarm</h3>
					<?php endif;?>
					
					<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
				
					<?php if( $location = $fields['location'] ):?>
						<p><?php echo $location;?></p>
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
				<div class="left cell small-12 medium-8 tablet-6">
					
					<?php if ( $days = $fields['days'] ):?>
						<div class="days">
						<?php foreach( $days as $day ):
							$date_string = $day['date'];
							$date = DateTime::createFromFormat('Ymd', $date_string);
							$times = $day['times'];
						?>
							<div class="day">
								<h5><?php echo $date->format('F j, Y'); ?></h5>
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
						<div class="copy">
							<?php echo $copy;?>
						</div>
					<?php endif;?>
					
				</div>
				<div class="right cell small-12 medium-4 tablet-6">
					<?php 
					$image = $fields['image'];
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->


	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php swarm_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
