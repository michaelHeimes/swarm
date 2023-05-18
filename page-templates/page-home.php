<?php
/**
 * Template name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */

get_header();
$fields = get_fields();
?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header hero text-center has-bg">
						<div class="bg hex hero-bg-hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
						
						<!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/hero-hex.svg);"> -->


									<?php 
									$image = $fields['hero_image'];
									if( !empty( $image ) ): ?>
										<div class="bg img" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
										<!-- <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
									<?php endif; ?>

						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 relative">
									<div class="hero-heading grid-x align-bottom">
										<div class="cell small-12">
											<h1 class="white-color"><?php echo $fields['hero_heading_line_one'];?><br><span><?php echo $fields['hero_heading_line_two'];?></span></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</header><!-- .entry-header -->
				
					<div class="entry-content home" itemprop="text">
						
						<?php 
							if( !empty($fields['copy_three-image_set']) ) {
								$copy_three_image_set = $fields['copy_three-image_set'];
								get_template_part('template-parts/content', 'copy-three-img-set',
									array(
										'copy_three-image_set' => $copy_three_image_set,
									)
								);
							}
						?>
						
						<section class="locations has-bg">
							<div class="bg hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
							<div class="grid-container relative">
								<div class="grid-x grid-padding-x align-center text-center">
									<div class="cell small-12 tablet-6">
										<?php if( !empty( $fields['locations_heading'] ) ):?>
											<h2 class="white-color"><?php echo $fields['locations_heading'];?></h2>
										<?php endif;?>
										<?php if( !empty( $fields['locations_text'] ) ):?>
											<p class="white-color"><?php echo $fields['locations_text'];?></p>
										<?php endif;?>
									</div>
									<div class="cell small-12">
										<div class="nation-map-wrap">
											<svg id="nation-map" width="100%" height="100%" viewBox="0 0 705 434" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet">
												<defs>
													<linearGradient x1="-5.28365385%" y1="50.8739837%" x2="106.036538%" y2="50.8739837%" id="linearGradient-1">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-2.44771784%" y1="50.5475556%" x2="102.425311%" y2="50.5475556%" id="linearGradient-2">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.13698925%" y1="51.008%" x2="101.668172%" y2="51.008%" id="linearGradient-3">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.474079639%" y1="49.9686007%" x2="100.391134%" y2="49.9686007%" id="linearGradient-4">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.57555556%" y1="50.0043194%" x2="101.130101%" y2="50.0043194%" id="linearGradient-5">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.494419841%" y1="49.9671823%" x2="100.6124%" y2="49.9671823%" id="linearGradient-6">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.570643275%" y1="50.0042716%" x2="101.546433%" y2="50.0042716%" id="linearGradient-7">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.778300654%" y1="49.9455615%" x2="100.758039%" y2="49.9455615%" id="linearGradient-8">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-4.24172662%" y1="49.9938953%" x2="103.505755%" y2="49.9938953%" id="linearGradient-9">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.01045365%" y1="50.1012022%" x2="100.997041%" y2="50.1012022%" id="linearGradient-10">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.46178161%" y1="50.0285458%" x2="100.546264%" y2="50.0285458%" id="linearGradient-11">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.453246753%" y1="50.1719611%" x2="100.516623%" y2="50.1719611%" id="linearGradient-12">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.2759366%" y1="50.3221922%" x2="100.787032%" y2="50.3221922%" id="linearGradient-13">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.82605042%" y1="50.0114022%" x2="101.486695%" y2="50.0114022%" id="linearGradient-14">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.6839599%" y1="50.0213333%" x2="100.871805%" y2="50.0213333%" id="linearGradient-15">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-3.09760766%" y1="50.0406467%" x2="103.626316%" y2="50.0406467%" id="linearGradient-16">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.810189229%" y1="49.9055325%" x2="100.849636%" y2="49.9055325%" id="linearGradient-17">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.602110092%" y1="50.0572491%" x2="100.556239%" y2="50.0572491%" id="linearGradient-18">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.798951049%" y1="49.9918333%" x2="100.990909%" y2="49.9918333%" id="linearGradient-19">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.989449541%" y1="50.5481818%" x2="100.862691%" y2="50.5481818%" id="linearGradient-20">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.705705059%" y1="49.9928161%" x2="100.565016%" y2="49.9928161%" id="linearGradient-21">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.619893899%" y1="49.839645%" x2="100.851813%" y2="49.839645%" id="linearGradient-22">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.136413341%" y1="50.0294964%" x2="100.277146%" y2="50.0294964%" id="linearGradient-23">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.431588133%" y1="49.9394366%" x2="100.469459%" y2="49.9394366%" id="linearGradient-24">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.587807487%" y1="49.984%" x2="100.711765%" y2="49.984%" id="linearGradient-25">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.96052632%" y1="49.9212195%" x2="102.337719%" y2="49.9212195%" id="linearGradient-26">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.779094828%" y1="50.1566613%" x2="100.501509%" y2="50.1566613%" id="linearGradient-27">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.896583564%" y1="49.9981441%" x2="100.550416%" y2="49.9981441%" id="linearGradient-28">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.35639098%" y1="49.9047688%" x2="101.380952%" y2="49.9047688%" id="linearGradient-29">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.72688728%" y1="49.9249347%" x2="100.455429%" y2="49.9249347%" id="linearGradient-30">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-4.13246753%" y1="49.2012346%" x2="103.601299%" y2="49.2012346%" id="linearGradient-31">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.722103387%" y1="49.7907193%" x2="101.260963%" y2="49.7907193%" id="linearGradient-32">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.838830409%" y1="50.0333797%" x2="100.525497%" y2="50.0333797%" id="linearGradient-33">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.54540816%" y1="50.3043393%" x2="102.269473%" y2="50.3043393%" id="linearGradient-34">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.63289183%" y1="50.0561881%" x2="101.076821%" y2="50.0561881%" id="linearGradient-35">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.581365741%" y1="49.9829358%" x2="100.670139%" y2="49.9829358%" id="linearGradient-36">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.00392422%" y1="51.0619855%" x2="101.538566%" y2="51.0619855%" id="linearGradient-37">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.9600365%" y1="49.8127536%" x2="101.016971%" y2="49.8127536%" id="linearGradient-38">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.679594017%" y1="49.9319481%" x2="100.504167%" y2="49.9319481%" id="linearGradient-39">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.666361556%" y1="50.084255%" x2="100.721053%" y2="50.084255%" id="linearGradient-40">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.10696517%" y1="50.2870476%" x2="100.746144%" y2="50.2870476%" id="linearGradient-41">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.845165563%" y1="49.9429167%" x2="100.626093%" y2="49.9429167%" id="linearGradient-42">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.544883485%" y1="50.0097561%" x2="100.503749%" y2="50.0097561%" id="linearGradient-43">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.656603774%" y1="49.8602083%" x2="100.496541%" y2="49.8602083%" id="linearGradient-44">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.594298246%" y1="49.9818085%" x2="100.556031%" y2="49.9818085%" id="linearGradient-45">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.660385757%" y1="49.9820339%" x2="100.709496%" y2="49.9820339%" id="linearGradient-46">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.00318665%" y1="50.15%" x2="101.011684%" y2="50.15%" id="linearGradient-47">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-1.23878788%" y1="50.3693154%" x2="100.920202%" y2="50.3693154%" id="linearGradient-48">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-29.573913%" y1="50.9782609%" x2="134.665217%" y2="50.9782609%" id="linearGradient-49">
														<stop stop-color="#FFFFFF" offset="0%"></stop>
														<stop stop-color="#F9F9F9" offset="9.337973%"></stop>
														<stop stop-color="#E8E8E8" offset="21.84%"></stop>
														<stop stop-color="#CCCCCC" offset="36.14%"></stop>
														<stop stop-color="#A5A5A5" offset="51.77%"></stop>
														<stop stop-color="#737373" offset="68.49%"></stop>
														<stop stop-color="#373737" offset="85.84%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
													<linearGradient x1="-0.521521522%" y1="50.0170501%" x2="100.681181%" y2="50.0170501%" id="linearGradient-50">
														<stop stop-color="#E2E2E2" offset="0%"></stop>
														<stop stop-color="#000000" offset="100%"></stop>
													</linearGradient>
												</defs>
												<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<g id="SwarmNationMap" transform="translate(1.100000, 1.600000)">
														<g class="nation-state no-modal" id="RI" transform="translate(644.338400, 110.588200)">
															<!-- <image id="Bitmap" opacity="0.5" x="0" y="0" width="42" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAsCAYAAAATmipGAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAKqADAAQAAAABAAAALAAAAABbWlCrAAADsElEQVRYCe2VSXbjMAwF0/P9j9tzULKK/YWQkjvZZGG8RwPEWILl5OnpIY8NvO8NfHgD3r21f98wY5TeO8yCWf7MR/4McOaz96leDelFPc+7uud7T7CVbe6pvhpEceZge++6DxLsSve66d1h02A5jafGzkOtcWwFQA8+bXXmaS/152Xk33Ah0B/rCJl25gCCCPSn2Vtw/yCHWmsydrDPQDNRqNTYHuGtSUhAPeQlOPl3wa5Ac0NCCIX+tJ/0mSck+ncdwFLXdfOhlUvYFSgNHKxOQECp7cDUIQwWEMhfddD0QiPEEXIvZQZKsxTuuTngvtShFi00OeQymAOQkOT8rNN7A6uPGuvLPMoM1AyKOAlJvoBAfq0jLDA5VEgAf+wx43U9yOV2V6A2RHsA4QDG+VYH0ITloRC/diCpcdvE3HhqZnBH0r556nMFaoGQbjVhAQRWYHp1UDYpaJmbJCC2Xz+zEIFvt/2zg5qcSR2WGo5bFdZXgFqG8wNKSKF8d9EugBhzhEy73OcbJS54wjJc0IRlw8TITVCH+s76F0Bge1fZAZb7kL7REQjDRmg3AFAC+67SjzxAiSNC81C8s+Sg7ZX9+2Yr7Sb3gJqbDYUWWGj6AQCcwGwQv4fcDlmuc/kf0OwkND6hHY5GvPsw3K1LW5/a93Rr4odNvc+0heg8bC3vaduH4Sn9nrFTu2+UYdmMOyIEcBx+CGnnD8Ncfebpr9Lx68a+SzpoFiWkw9RA8O7xo/CPOg9I3G8p4/2XTm9yhU9d7pdyBkp2NlhB+u+RfB4AUOqwiXF8oATO3tinsgKlkA1lM0DdpNv6HnnE6eerQy6AgJInMH6PWy3XNis19pAZaEIKO9umv1yaEQe+g+Jzq4ICD6g9Z7AVPsoMNDNWG01IchgMFH6/egDwu1WByeMImzPKvQm+g5yBmoxmKNulOSAMR4wJlA8gqGDUeMifgTqT3gdZgVLgu4YtED4GK/rx+R/H14WYQGiB0ULyMBxylbT1be/UuEwMi9A0TNHHUCHZqJLxBE5IcvJY+0KvNkoiDXKr+BJWEHwMJ9eTw4mbo4223txyHTbLfcgZqEk0SmEI4iDu+W761ZPTgfq996ZmKm5sGtyd5ritK02ZAOirs48ZNd4PWoiDc3IxL7XApKdteYfFL7R2auylOHiZEIHM1e460oeZwDi9d3sUzAwHzWIzX8/v91kNvoSb3Vd1w3/voFGwG6+t68C97/L+2oG94arPq8H6gMf9sYH3voFnnn6UmRwSaIsAAAAASUVORK5CYII="></image> -->
															<g transform="translate(15.861600, 15.911800)">
																<polygon id="Path" class="hover-state" fill="#808080" fill-rule="nonzero" points="4.4 0 6.3 3.5 8.9 4.4 10.4 7.4 8.3 8.6 7 5.6 5.7 6.5 6.3 10 2.7 12.3 0 1.3"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-1)" points="4.4 0 6.3 3.5 8.9 4.4 10.4 7.4 8.3 8.6 7 5.6 5.7 6.5 6.3 10 2.7 12.3 0 1.3"></polygon>
															</g>
														</g>
														<g id="path4779_00000037692763268006702900000008375662420952202121_" transform="translate(622.338400, 111.588200)">
															<!-- <image id="Bitmap" opacity="0.5" x="0" y="0" width="56" height="55" xlink:href="data:image/png;base64,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"></image> -->
															<g id="Group" transform="translate(15.961600, 16.311800)">
																<polygon id="Path" fill="#CCCCCC" fill-rule="nonzero" points="21.4 0 24.1 11.2 10.4 16.4 5.8 20.1 2.1 22.5 1.7 21 3 19 -1.13686838e-13 4.9"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-2)" points="21.4 0 24.1 11.2 10.4 16.4 5.8 20.1 2.1 22.5 1.7 21 3 19 -1.13686838e-13 4.9"></polygon>
															</g>
														</g>
														<g transform="translate(621.338400, 94.588200)">
															<!-- <image id="Bitmap" opacity="0.5" x="0" y="0" width="79" height="55" xlink:href="data:image/png;base64,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"></image> -->
															<g transform="translate(16.461600, 16.411800)">
																<polygon class="nation-state" id="MA" class="hover-state" fill="#808080" fill-rule="nonzero" points="27.7 0 29.2 0.1 30.2 2.2 32.4 3.1 29 9 30.5 10.5 31.9 9.8 33.8 10.1 36 12.8 36.1 14.1 38.3 16.5 40.9 17.4 45.1 14.9 43 11.3 41.5 10.7 42.1 10.1 45.4 13 46.5 17.7 45.1 16.8 38.7 20.3 37.1 17.5 33.2 22.5 31.7 19.4 29.1 18.5 27.1 14.9 22.1 16.3 0.4 21.2 0 8.7 25.3 2.8 25.7 1.5"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-3)" points="27.7 0 29.2 0.1 30.2 2.2 32.4 3.1 29 9 30.5 10.5 31.9 9.8 33.8 10.1 36 12.8 36.1 14.1 38.3 16.5 40.9 17.4 45.1 14.9 43 11.3 41.5 10.7 42.1 10.1 45.4 13 46.5 17.7 45.1 16.8 38.7 20.3 37.1 17.5 33.2 22.5 31.7 19.4 29.1 18.5 27.1 14.9 22.1 16.3 0.4 21.2 0 8.7 25.3 2.8 25.7 1.5"></polygon>
															</g>
														</g>
														<polygon id="path4743_00000124861665425341573670000010121662074885425796_" stroke="url(#linearGradient-4)" fill="#CCCCCC" fill-rule="nonzero" points="145.7 18.8 274.6 41.5 268.6 90.9 266.6 106.7 185.8 95 184.3 103.3 181 103.4 179 101.2 171.5 100 162.1 98.7 156.2 89.5 153.3 74.3 149.6 76.1 150.7 69.3 153.9 62 152.5 55.8 151.2 52.8 149.5 45.2 141.5 32.4"></polygon>
														<polygon id="path4745_00000178907799070621939820000009715215386717260932_" stroke="url(#linearGradient-5)" fill="#CCCCCC" fill-rule="nonzero" points="669.1 32.8 679.7 35.5 688.2 58.1 696.6 59 702.8 68.3 700.4 71.6 697.9 71.7 697.2 73.9 694.2 73.6 695.9 76.3 693.6 76.6 693.5 78.1 689.9 76.4 690.4 79.1 687.4 77.9 685.3 80.4 682.3 76.5 682.5 89 679.3 87.2 676.9 92.8 678.4 95.8 677.2 95.7 675.6 92.9 672.8 94.7 674.7 97.6 670.7 101.3 673.3 101 672.9 102.9 670.2 103.7 670.7 106.9 668.4 109.2 666.3 108.3 653.3 73.2 656.5 71.8 656.3 67.5 658.7 65.6 657.7 62.9 658.8 59.7 656.1 49.7 662.1 33 664.5 35.2 667.1 34.7"></polygon>
														<polygon id="path4747_00000031194029245360248710000017050742112138710421_" stroke="url(#linearGradient-6)" fill="#CCCCCC" fill-rule="nonzero" points="41.2 37.4 53.9 43.8 53.9 50 68.6 56 96.4 57 119.7 63.1 125.2 73.9 119.2 77.6 103.8 127.9 65.4 117.5 14.6 101.4 14.6 92.5 12.3 87.3 17.1 86.4 28.6 67.5 34.3 51.9 41.2 43.3"></polygon>
														<g id="MN" transform="translate(349.400000, 46.400000)">
															<polygon id="Path" fill="#808080" fill-rule="nonzero" points="1.1 0 21.3 0.2 30 5.4 35.2 5.9 47.9 9.3 50.5 7.2 52.1 9.4 51.5 12.7 56.4 12.7 63.6 14.9 79.2 12.9 85.5 14.3 67.9 24.8 64.6 30.2 59 33.1 57.3 39.4 56.8 48.9 54.1 52.3 49.8 53 51.9 61.2 49.4 68.9 55.9 75.6 58.1 75.6 62.4 81.3 66.2 82.9 66.4 85.2 69.2 86.4 69.7 91.3 7.4 91.1 7.4 60.9 6.7 50.3 6.8 50.3 5.2 30.2 1.5 11.9 1.5 9.6 0 4.1"></polygon>
															<polygon id="Path" stroke="url(#linearGradient-7)" points="1.1 0 21.3 0.2 30 5.4 35.2 5.9 47.9 9.3 50.5 7.2 52.1 9.4 51.5 12.7 56.4 12.7 63.6 14.9 79.2 12.9 85.5 14.3 67.9 24.8 64.6 30.2 59 33.1 57.3 39.4 56.8 48.9 54.1 52.3 49.8 53 51.9 61.2 49.4 68.9 55.9 75.6 58.1 75.6 62.4 81.3 66.2 82.9 66.4 85.2 69.2 86.4 69.7 91.3 7.4 91.1 7.4 60.9 6.7 50.3 6.8 50.3 5.2 30.2 1.5 11.9 1.5 9.6 0 4.1"></polygon>
														</g>
														<polygon id="path4781_00000082339458667377109830000002654283985254688405_" stroke="url(#linearGradient-8)" fill="#CCCCCC" fill-rule="nonzero" points="139.4 136.4 175.5 144.3 172.3 160.2 197.1 164.9 187.4 229.9 120.6 217.9"></polygon>
														<polygon class="nation-state no-modal" id="NJ" stroke="url(#linearGradient-9)" fill="#808080" fill-rule="nonzero" points="626.7 148.2 636.9 151.2 633.5 160.3 637.6 159.7 638.7 161 638.4 169.9 633.5 182.6 632.8 182.2 633.4 179.4 629.8 179.7 627.1 178.2 624.8 175.2 626.7 171.9 630.1 169.3 630.1 166 625.2 161.4 625.4 152.6 627.3 150.1"></polygon>
														<g id="IL" transform="translate(403.338400, 136.588200)">
															<image id="Bitmap" opacity="0.5" x="0" y="0" width="83" height="124" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAAB8CAYAAAAVSIzjAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAU6ADAAQAAAABAAAAfAAAAABmS9XOAAATc0lEQVR4Ae2bh3LryA4FX47//6Uv5zdNq1lHEIakKNG+tWVUjYFJCE1Q9vWuf/azb/km8E3gJ07g519Q31fEpMz/XV3r1YUd8X/kzFkOWwC39k7Fu6qQ6ndvTvL1zKmCxqUOUq6lTYw6Pxv3bQWYQALRrpqzrlVbP1vreUZ7BsT1PY0fz+jzaZ1FPX05LqQfbXS1c871PKM7zzh/RicQbXQO/HVz19Gn5JXEDZg+hPOsxlf66ebG67Tg2NNOYNr/ve07rzrvYz8lv3rq9ONhAaQW5C/GcWy0w3lqz+MdO6XOc08bIIp2QgKgELVTexfNPWLqh7XD8irMDCQUwaX+5TjIXJ173lPrk/lRsfiEiC20/9xsdNrE8MwwF+Ee6/r8WD3w9RWYFot2JCTAOYijnTrP64O09Y19VBKkgNACRP/7NrCJoR7mAhWNnAL6CkyCCgCdYACG7xy/LnMB5z39jaNPAbWLgIfdQfzXWAcmmkFcNEAV7in6dL6rz8Kk6BQhkGCCBOBvxui0oO1U7upHPZYOCYU7EqSdCLR/3gbxfIDDXB+a8Hwg7rnOfFPOwkynFo4WJgkLEJi/LUPAdusM6Li2FotdxUIFiabTHHYhIP8xxt/HyDdiTBfxPhNsakG00bvyCkwhEkSQarsOWID83Ri/v2ls4Qo1C6wdOo4vYoFMsjhtO6oDCUSGD88Y+sJHHewh+v+YbXx9BaZuLVKQdie+7Uph/mGsAVWwQOWM8PMVxJ++hzmVhOAr7mdjduTfhgdgVpA+hPSD7TqByWMX6jtgGsziEyb+szuBmQPIwLRDu9d9bE+hWqDFV5i+2oL0YQkn73E3h/UQ3zjYUzkDkyCKAV1DAzOBAjM7FJh/vI3sUF9BC7aD9D2uLMI8i8N2+IrTmXYlIO1+fHtfcN5JTWx8enaYdzbzBzkD88HJbYHAdZCU3dkB9bX3M5SzDIvmPoLfmQgSLRBh8jmJbx6UPjmXHexHAtr7grYe7uzKGZg4tritIJwBBoNCZlAB6jclirZw7lmM8cbSg5CDQxjCzM9kH4wg/U7vj01CJVf8cJ6zCPG3al0OnYG5XIwvFlKDCUAgJMkAll1KsYAEqIULk7PeVY+lOzGmOVSY+uI+Z4AjNH/u5HMVG6jwYL8+SOOMrbm8A2Z6tyjWMgFhkKRQiV2h+kqyx1nHMNe3ATvFmGi7DiCCxAfinp3oNyc+CrCJySA/46Lx68NQj6VH4fIVkiDTv1ATKDnYrcBlZFHeQXcygykU7iRIIfKNqX68GJe7dHnGxJ7VNbY+kl6MF79YEG4MqNZ1QsH26VOAA6gM55zJe2P6IMZBC60DSbfyOtOJQBSkD9C43s242MYZZi8k/Q4h2BExQUGqKYBc1M/AJC6FOvQpAAD7OelnNNrPaGDmQySHCnQs7cu7YBJJoAksbbsstYWrLSK1PvTfVSVItOex7VS7T50ghenDNLZ56g+tf/SDnIGZRWUgbKGkJjkT1M55nq22Po2pzkKyQItEE8MOR9N9wqy2r7hAyaPGHkvb8ixMi0HnSAgCswB02lmkZ/O+hWQxGbdWxF4CZV+YfBPJeDUX5+gulxrXWMR4EJycEZw6BJFJ+xmUHWBXoC3CAtAJUd/kljbzTjijYOOLVxydMYyLrt3ImnnUXMbWkoedz/xBcHBUTDh1JmuCQvNDvmr3Bb5VhLHMsc5dzyI54yA/h1CJZ0xt59bj/dTGmmouPyM6N0GDk4xwgOWPHv66Te263wDsDgvVr3HIDRtRf8zuv7qn9jxzhn7Nl3gCrLHzrPfxtytcPCJdkpkYUIAIJIEBMH9DhM3I3xRxx+6gKHxmARl3bB0S76dOQJl3gky7yyNzSXtNiktHpUuOBOzKhCk4f9WGdi1h2s34yIKNZW5t8m7edD2jj9QZA9sHqGYtz+M6/abN3p1weU/SQQbySSZMurJ2ZAWaMHkAANVXLSZj7+WZ+3nPnPHdjQqy5pB+N20uHhWTQptUgvQVtwMTovazr/nR3GbnMmdtc59p6/O8ehZjXT8KE4eIgbjHE60w6bpZZ3Yg8xuQxZl8xhxunxbvc1GfxMA21kx7Xq0P9FRwdlR0bDIVZv3GA7zakfmKCzI/L41xNKfuHD6U9KetFqTzmcYXe0rari16D6YXMxB3/Iyrnelnpt1pN9qx/szpZyX39YXfjEOCxsd+RfSDrnGY5zidA072xEQ4ZzLcq50pqASqjXY/OxIf+MoCjKce2y9J9c28wssc0q451PldYlw8IpkQdwSZnUm3Aa0bCVKYgsRfFjCmL3dk5os/RBC5h21sdd3P+eJo9gUHM8FJioG5wxAocBgCQ9uJaCD7WncgTXYcu0T032kBVu3ZpxLCyZboFJ0BBVk7E2jATC1IztbPSH2OrbvOYX6FZD3a5qB2nfhp7+aDgz3RIZrzDGAy7EqA5RCo+9mR3NNP+h7LK1DsM4K/TjKONjlob2n8sV/lYQ2HndSDBkuQdprAshtd6yDqKzU51JhdXs+uGUP/ztU+VMGq3feeOtcfcuHyTLyozsAdSAHaoc4923WksYlxpeg/a9FWC1LtOnlh78oWTC7rUJC+3mggCQwtRLTreyAPJTn8nZHq23mtydpc7/Sh+HswcaJzgwpIYAkxQbLP2exIfOgP/RliPGJpV21tNb96bjNfLlfBAZKODGZnbgEVsme8UxP9iPIRR/tdOmvQZ9ajbV3MzS/XvHtIc7GTTKYGrq947UbndmV2pr66mFeuGTd1B8+1PKdNfthTmcHkghfRnGPYZXYdmk70VffVdr8DaXL6H9cvlYxjbKGpWU/bc2oSxFbSdm1xsE4aQ2dogjESqK901dmVFWiGaZPKA2+0jZU1ZV3V9hwpYO8KcFLyks5SJ0i7b6Y92z3xjPkZdtagbXPkvLNZS6nzda/CdCMvZADOC2kPoh3p/erTWFfprbi5h+0DV9f9nE/zncH0QjrR5o4jwWoL0cTU+NSH/j9LG7fT5le1Zw/niIMjouMMiM0Qntp176TOWKx/hWQ+2lmXa+bnfDdXnByRdKjdaZPKvSP+33mG2J1kTtpdvu6lxh/zKndrR2DmhWo7V9dgP8Kc3MxPOzUMHKxXwNTQ3Wf9To7AzP+Pp9rOZ/ouWJl4pyxfNq1AKrQEWfdIyvvTBI/A5DKFzwb/t1kdnGWt3hlLyxr6M6QCcI5mUH8O1zu9m+8ZmAnOPxXpdJ5LqCTFHFF/zK77KhwiaFf9MtQ9mAkBW0DC4/8Vd/AnIdqpOes9dPoc08uAAgtRa88g5rpg8+7ibOvLDGZ2jMULBDjAEh7a4R8nucc5wQtSrd9x5DKg+FYSljb1p50QXU+NL+at8K+YFAr0sMWqgSAYOy//ysu/9FKz5y8+/BlU32pjM8/Yrr9LZzzsHHsA611zYp2cV6kw142bkSCFOQPJ39c48j+oEQOYFnBzvaxpo00uk8/9d9j6Npdn9G78LZiCRAsyX3E6r/61F3/1VUHWJ09SFuUeawjrPm3PLBtv+KK/1Ng5yCfnGdZ7uXZnz2BSkJcB6RBmvt50o38695dh+8thX3GB6W8cWYRuVTiTwtnMIfeesWtM5+hu4Nv1tL3HGsLch74s8KWDaRHoHHan33zsSn8xXCHie+tJm4yaBD3PmgnXQsbWU8L99JG2jjyjZr075/lWdzDzoDAFSWfynZp7dCdd2f1ieAZSf6nNwe6sBQl2hHqrGKeD1q0RfLa+JGYhXZYUgVi4QLMzuV8Hr29+wzEB/cy0r71QiY1wnzv6Ye0qeSnGDGYmjw1IAtGZFEt3ogWnZo3BWccw1weSIPGZc2wErZ9lYXzBF+vod0nG1qc5OH9Kz2DqROdoO1NIwrTw1BadCaeNrwrTmOakD7X7z+iM6T3WquRad8fzec61VZv4uhAGFy3EAAIFHN3JPoO59jAXycB5vwOZZ7lMXvp1jzk2+qzoC11H93DzzG7MLZheNgGCIRTD5ya6G2N5FZMRoAmr3eeCkKpP4+eZNcAThn6Mqc5c0nY/7xnONeeL3oPJJYrzMpqASC3+Y/XxrHcyUX3otwLs5unf2K51Wt/saaMd5LA38h5+NmUPJpdxaPLYguCbEeLex6xP3AK8j1a4n5+32HxDQxOLfWOox9JhMVaXgzCpRRvdnXXNwPp13v7Qvm4WIy8TcE8MrjZJ7glIiP40kNo9ND64ox7mIeE8kjkIDYAJcWZ7d3F086V9p490JhcswuRcS6gG3dJCRAMJeOSQg38E8JnMmg9An9zbk8yRs97VlzDRAq3aM95NPY1/FKZJ2R3MCYjU5F2rCVSQxM5/PfELEv5V5T9LKZAz+hnmKqztgfVeaiElPB4cgzW1+55PH9rj+L08A5ObOKpAu6I4lyJIuxGI+W96/iqDf+sDNIuzGF91449jm1LjM9eXoARnPOfue567jhr0Ls6zMHGGgwTKGoERg2aQCpKYggQef73mL5T52ZVBQbWYsbSI8Z1v6cwHW58CS5DEde6+eaSfabwzMHFmQWhFoM7RCZJYggQivyTxN08JMzvE4rMYfCLm8DH7+Jr55B39JCTiCLBqz3kPrW91xl3sszC5jNNZh7LPHkmi/S7N6w24HP5uFG1RFahgxpE1LvZMPI8WiIDsPjUxHa6hvSdIfRIT+0FegYkznM6Akjx7aJNMcNh2pCArzK4g46UerlaphQpBX+YjwIxJnkJHdyDXQNXgg/1VMXmTVtfkBUryQk27A1o7pCsu42ctNQ/uCjJz6aB2QPGtT230Ku+AibMsyIBoC5gVIdSqu24RpHotIuK7Zg6ezTzMJSEaTy3MvK9PYzzod8HEMcEUA6uzmOyKCjFfezuV8xaH1qfamGjXUs9iZx6CdY043HPojxhTefUzs3NMYARtMmqTJXlB+s0ov7v7V8H8CMVZvoHx4PmcZCBqbeMum7cvNQcgZQ5CRLvugyNn7ndjLD/Ku2ES2CIzCRIzSZK2CIACE5AM/ysnNiDJz58EEqZQuzfLuD5A5sYXWObg2gyoUIebVfD5IO+GaQCCVahZEIknSCFmR/JjFPkJFHAOYY6lZQ2tCFOdDzEh+kDV7HkWnQ8D3y1ANpSrYOLfYkxqDyY/yDP811GF6ateO9QiAaxdYwspu1CIaNcFas76Sb/jeC9XwCTwrCspioQpgNcbYAwBol3LrsxXvcIcV5butGBBqPdAClWQnk+Q2sQyDvadXAHzLsCYmMisMys8IaoBiZ2d2b3uew/Q7hNeavfQPgT1FN44eydXwjQJXz/mdiZg+MwUksAE2GnO5MgOHVvL2+CDs7vUQEp4nc0Zz1eQ1kKcqVwFk+DZKSTHnEHCFAMMXnW0MNUdTNcE2sEcrtbv3MSpEHmAxEY7mHOuwvTBCFI9jvZyFUyjZQICpUigAsMhoITp6586gQqTWMTx4RGngyg8HqC2HVpBZmfi2zrUY+lRroRpgSaAJkmEwikEnWCFKrQEmbbnAIoYC1uYAhMeOof7M6D4NHf87sqVMAmeRWIL0+6kI+xOdO1Mv7v73R6g5CxMHgR+8SdYX2/A5b+q/IdBBVpfc3LEZ44x3ZerYZoBiSnYJCxQu1NAdmWC7H7+BJ6+uIMfBL8AAhr/GPjrbWA7hMwZOlSg3CU3gQ5zkczftQf9GTBJxA4iARJNqTAplA60GxMka+QMeATfANiCyf+AC1B1AhUkMPFTYeJfkOqx1MtnwCQyiXRAWaMANAXZnX4+ClTNOmd8pXkw3BMmcfDHGg8FcED8800nULsToHzc+E3IrsTXLsBxZpXPgknACpQ5iQuTYgTD65fdWWECX5B2q2sVJl0JzD/dNECBnDCJ28Ecy8eBfiZMEksRpt1JMXQdnUJeAKVgYNmp7HOeu0KzW8fSsu5Dyc9MYDrszgoTfzwgBzEYh+WzYZKcMEyS5CtQOgWoFAws8mTwenOWO0BzH8gI60Dhrg/Db0Ddq84Zu3LWmePIMaifDdPEEqgdIAg7yw4VZnYlZ9jnm5OQ8S1kAAnTbzj1m5CdKUw703zU+D0kXwGTxOxQbSDYnb6+wHPYkZznrLAEzV2Eu97P7hSoWpCcESZ+HeSnpO1aq78KpsmYKJpBMcCwOxPmWF7O2JW+4hW0dwUOMOGlFiTnfAjENxdzG0vH5CthkqwdJUi7Ew2kBOUZigeEXckZRSgCFRivPHYdnGNwL0GO6SJPAf1KmJkw8IRFYcwpEq2wz54dB0yBeyY7W6Cc70aCFGYHVN+7+qthAkiQJFuBJkwKFRB5+xHgGe96DkACq9o94SdE/CDqj9mBr18N0xRNXCAAomCENQZzBl0myHzFPScgz6sBmnvYDuOOpfPyI8CkkOwuqqHIFIsFDCB9vbnHYB/hHjbnBNXZ+ks9rqx+9MfaYfkRYJpsFpAwLZg1wFSQeZ+zeV64gnXPc6nTj/ZT2o546tJFh83FblMnPGzX1aaTYNIWaK5pcxdbSdu1w5qEfiQxH0FtafL2vBBSY+fgvHNtNOK9j9nJryZz8vol1zKnhEkw59qZgECOau56Nv2ctjPx004uuJh5aVfdhU04M5t7udf5ObVmgqcuf8Klml+dz1LoYHVrs/un1o8md8r5Gy+dzfNygFnj2STTx1fYXd6fCu4riv6O+U3gm8A3gZ8Sgf8DJUzhocQJBs8AAAAASUVORK5CYII="></image>
															<g id="Group" transform="translate(16.261600, 16.011800)">
																<polygon id="Path" fill="#808080" fill-rule="nonzero" points="41.4 0 47.1 10.6 50.7 58.1 48.2 66.6 45.6 77.5 43.4 85.1 40.6 88.4 34.2 87.4 32 91.5 27.7 89 26 80.3 15.8 70.6 17.9 66.7 17.1 61.5 11 58.8 1 48.4 5.68434189e-14 38.5 4.5 28.2 4.6 22.9 15.5 11.8 14.4 9.2 7.3 1.2"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-10)" points="41.4 0 47.1 10.6 50.7 58.1 48.2 66.6 45.6 77.5 43.4 85.1 40.6 88.4 34.2 87.4 32 91.5 27.7 89 26 80.3 15.8 70.6 17.9 66.7 17.1 61.5 11 58.8 1 48.4 5.68434189e-14 38.5 4.5 28.2 4.6 22.9 15.5 11.8 14.4 9.2 7.3 1.2"></polygon>
															</g>
														</g>
														<g id="VA" class="nation-state no-modal" transform="translate(508.338400, 172.588200)">
															<image id="Bitmap" opacity="0.5" x="0" y="0" width="138" height="88" xlink:href="data:image/png;base64,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"></image>
															<g id="Group" transform="translate(17.261600, 16.311800)">
																<polygon id="Path" fill="#808080" fill-rule="nonzero" points="70 0 72.3 0.5 74.4 3.9 78.7 5.3 81.1 8.5 79.4 12.1 80.4 15.7 83.6 15.9 90.4 18.1 93 19.9 93.1 24.1 94.5 25.4 89.1 25.7 94.8 28.9 94.7 30.6 97.4 34.3 92.9 32.1 87.7 30.5 82.8 32.9 90.1 33.4 97.6 37.9 101 36.8 103.3 37.5 104.3 36.4 104.4 40.3 28.3 52.6 0 55.7 6.8 49.6 7.2 47.5 17 39 17.6 35.1 24.7 40.1 28.4 34.4 31.7 36.3 34.1 33.7 39.7 33.7 41.2 27.3 44.6 23.9 48.8 22.1 48.6 17.6 54.2 18.8 58 13.2 61.8 9.6 63.1 6.1 65.4 5.5"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-11)" points="70 0 72.3 0.5 74.4 3.9 78.7 5.3 81.1 8.5 79.4 12.1 80.4 15.7 83.6 15.9 90.4 18.1 93 19.9 93.1 24.1 94.5 25.4 89.1 25.7 94.8 28.9 94.7 30.6 97.4 34.3 92.9 32.1 87.7 30.5 82.8 32.9 90.1 33.4 97.6 37.9 101 36.8 103.3 37.5 104.3 36.4 104.4 40.3 28.3 52.6 0 55.7 6.8 49.6 7.2 47.5 17 39 17.6 35.1 24.7 40.1 28.4 34.4 31.7 36.3 34.1 33.7 39.7 33.7 41.2 27.3 44.6 23.9 48.8 22.1 48.6 17.6 54.2 18.8 58 13.2 61.8 9.6 63.1 6.1 65.4 5.5"></polygon>
															</g>
														</g>
														<polygon id="path4819_00000125562827781274172640000007971371281154660287_" stroke="url(#linearGradient-12)" fill="#CCCCCC" fill-rule="nonzero" points="265.7 240.9 279.1 242.1 279.1 241.3 377.8 245.7 377.6 253.2 377.6 253.2 377.6 253.5 377.6 253.5 380.6 301.5 379.4 302.6 371.5 297.3 355 300.3 354 298.1 347.4 296.5 346 298.7 343.8 296.8 334.5 298.6 329.5 292.6 326.5 294.3 313.3 286.6 303.4 284.3 304.9 251.6 265.1 248.1"></polygon>
														<polygon id="path4829_00000069392982658672460860000009726393925859579779_" stroke="url(#linearGradient-13)" fill="#CCCCCC" fill-rule="nonzero" points="536.4 270.9 534.4 274.8 562.3 303.2 566.5 309.1 566.5 315.4 571.8 314.7 572.8 316.2 569.7 320.5 569.6 323.7 566.6 325.7 566.3 332.1 565.1 336.7 566.6 339.3 559.6 339 557.6 344.8 556.2 342.7 516.9 344.2 515.2 340.8 513.6 328.8 516.3 317.5 510.6 307.7 503.4 274.7 516.1 273.2"></polygon>
														<polygon id="path4835_00000178897976410962771070000014417866958788078210_" stroke="url(#linearGradient-14)" fill="#CCCCCC" fill-rule="nonzero" points="428.5 311.6 430.6 322.6 420.8 346.2 446.9 344.4 447.2 350.5 451.3 357 444.5 354.5 438.1 355 433.5 358.3 438.5 359.8 440.4 361.9 446.5 359.5 449.8 359.6 453.7 361.2 453.8 364.8 450.2 365.6 451.8 371.1 457.1 373.2 451.4 376.3 449.7 372 444.3 368.7 445.3 374.4 441.9 375.2 439.1 370.8 437.2 376.5 431.7 374.9 430.7 372.9 426 372.3 423 368.1 422.2 363.3 413 364.2 417.7 368.7 411.5 368.9 401.5 366.3 399.2 364.4 398.9 361.1 398.3 361.1 397.1 365.6 390.4 367.1 392.3 362 392.3 350.6 393.5 345.6 391.2 342.1 389.8 333.9 385.7 325.6 385.8 312"></polygon>
														<polygon id="path4741_00000116956446058836350440000013280779128397869991_" stroke="url(#linearGradient-15)" fill="#CCCCCC" fill-rule="nonzero" points="135.3 16.1 145.1 18.7 140.8 32.4 148.9 45.4 150.6 52.9 151.9 55.9 153.2 61.8 150 69 148.7 76.9 152.7 75 155.5 89.6 161.6 99.1 171.3 100.5 178.6 101.7 180.6 103.9 184.1 103.7 175.5 143.6 104.3 128 119.6 77.9 125.9 74 120.1 62.7"></polygon>
														<polygon id="path4753_00000008853487461617800960000003445536033504570009_" stroke="url(#linearGradient-16)" fill="#CCCCCC" fill-rule="nonzero" points="652.6 73.4 665.7 108.7 667.9 109.7 667.1 110.6 665.3 110.4 663 112.2 662.7 113.3 648.1 116.7 648.1 113.1 647.7 110.3 647 104.9 648.2 96.6 647.6 91.7 650.8 88.7 651.3 85.6 650 83.2 649.8 77.5 649.8 77.5 649.7 75.2 650.5 74"></polygon>
														<polygon id="path4757_00000173163018899719798170000015569597903513981062_" stroke="url(#linearGradient-17)" fill="#CCCCCC" fill-rule="nonzero" points="421.7 81 423.6 82.4 422 86.6 427.8 86.2 433.3 90.7 438.8 90.4 454.1 97.8 460.3 110 457.2 116 454.3 120.8 455.3 123.4 457.7 117.8 463.2 112.2 468.1 103.7 468 106.2 462.5 120 462.5 122.2 458.5 135.7 461.5 148.7 460.9 152.2 426.4 153.3 420.6 148.5 421.4 141.6 419.6 138 419.1 132.5 416.3 131.3 416.1 129 412.2 127.3 407.8 121.5 405.6 121.5 399.4 115.2 401.9 107.7 399.9 99.9 403.7 99.3 406.7 95.6 407.2 86.1"></polygon>
														<polygon id="path4787_00000007399571377625469550000014747303211461751201_" stroke="url(#linearGradient-18)" fill="#CCCCCC" fill-rule="nonzero" points="263.3 140.5 314.2 143.9 325.1 148.1 336.8 152 344.5 149.5 356.3 154.1 358.7 163.4 362 172.8 362.5 182.3 366.7 187 368.7 194.3 284 191.3 285.4 175.1 259.7 172.6"></polygon>
														<polygon id="path4791_00000029020573549942607980000016215948217404416920_" stroke="url(#linearGradient-19)" fill="#CCCCCC" fill-rule="nonzero" points="550.5 151.6 553.3 151.6 558.2 184.7 555.5 185.8 550.5 195.5 547.5 196 546.4 201.9 542.7 202.4 542.2 206.9 540.1 209 539.9 211.6 536 211.4 531 207.7 528 209 521.7 208.3 518.8 206.7 506.1 203.9 501 162.4 521.8 159.9 527.4 161.2 523.8 163.5 527.8 164 532.1 160.7 536.1 158.6 538.6 159.1"></polygon>
														<polygon id="path4801_00000060711254148886443540000008615823716365641647_" stroke="url(#linearGradient-20)" fill="#CCCCCC" fill-rule="nonzero" points="623.1 177.3 629.7 200.5 638.6 199 638.6 205.2 637.4 202.5 636 207.3 629.4 210.3 630.3 208 629.4 207.7 629.7 206 628.1 206.1 628 203.7 625.7 203.3 624.9 204.8 621.9 202.8 622.5 200.6 621.9 199.4 624.6 199.5 620.3 196 620.3 195.3 622.2 195.4 621.7 193.2 622 189.7 620 189 621.3 185.5 623.2 184.3 623.2 183.2 623.7 181.7 621.8 180.7 620.4 182.3 620.2 183.9 618.5 185.8 616.8 187.8 614.5 187.8 616.6 190.3 616.1 191.3 618.2 192.2 616.3 195 616.8 196 616.6 197.7 618.1 201.5 620 203.6 619.4 204.3 616.7 201.9 616.1 203.6 619.6 206.2 620.8 206.3 621.3 207.6 622.2 208.5 620.9 208.8 620.4 207.4 618.9 208.6 616.3 206.8 609.3 204.6 606.5 204.4 605.7 201.5 607.4 197.8 604.8 194.2 600.5 192.8 598.4 189.4 595.8 188.7 593.9 185.3 584.3 186 578.5 190.3 575.8 195.6 574.3 196.4 573.2 185.9"></polygon>
														<polygon id="path4813_00000026873131886839133080000017335090364980715143_" stroke="url(#linearGradient-21)" fill="#CCCCCC" fill-rule="nonzero" points="120.5 218.4 187.3 230.4 187.3 230.4 173.4 322.8 145 318.5 94.4 289.5 96.7 285.9 101.6 285.2 98.7 277.5 101.8 269.7 109 260.5 105.3 249 107 245.7 105.5 238.4 108.6 228.7 114.2 229.2 117.5 232.5"></polygon>
														<g id="TN" class="nation-state no-modal" transform="translate(424.338400, 225.588200)">
															<image id="Bitmap" opacity="0.5" x="0" y="0" width="146" height="66" xlink:href="data:image/png;base64,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"></image>
															<g id="Group" transform="translate(15.961600, 16.511800)">
																<polygon id="Path" fill="#808080" fill-rule="nonzero" points="113.1 -5.68434189e-14 110.7 4.1 107.5 6.5 106.3 8.3 98.6 14 88.1 22.7 82.4 24.8 75.4 30.3 62.5 31.8 25.5 33.8 0 33.8 1 30 5.8 20.7 5.8 16.3 7 10.9 26 9.4 24.4 7.2 83.6 3.2 83.6 3.2"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-22)" points="113.1 -5.68434189e-14 110.7 4.1 107.5 6.5 106.3 8.3 98.6 14 88.1 22.7 82.4 24.8 75.4 30.3 62.5 31.8 25.5 33.8 0 33.8 1 30 5.8 20.7 5.8 16.3 7 10.9 26 9.4 24.4 7.2 83.6 3.2 83.6 3.2"></polygon>
															</g>
														</g>
														<polygon id="path4823_00000072959599878084685480000004786735621467753630_" stroke="url(#linearGradient-23)" fill="#CCCCCC" fill-rule="nonzero" points="265.1 248.7 304.4 252.1 302.9 284.8 313.2 287.2 326.6 295.1 329.5 293.5 334.4 299.4 343.7 297.6 346.2 299.7 347.8 297.3 353.8 298.7 354.8 301.1 371.5 298.1 379.6 303.5 381.1 302.1 385.4 303.8 385.2 311.5 385.2 311.5 385.1 325.8 389.2 334.2 390.6 342.4 392.8 345.8 391.7 350.6 391.7 362 389.7 367.3 377.4 371.9 377.4 365.5 372.9 367.4 376.2 375.1 375 378 372.1 377 361 382.7 350.5 388.4 341.4 395.7 337.1 405.3 333.6 409.2 339.1 425.6 338.4 429.4 331.9 425.4 320 425.6 313.1 419.1 307.8 411.7 305.6 399.7 300.4 395.7 291.9 377.3 283.2 366.1 262.4 359.6 256.9 364.7 252.5 373.8 234.3 361.9 228.8 344 209.9 321.7 210.5 318.3 258.5 323.4"></polygon>
														<polygon id="path4837_00000106125649080662558580000012648126173349540787_" stroke="url(#linearGradient-24)" fill="#CCCCCC" fill-rule="nonzero" points="559.9 339.5 566.8 339.8 568.4 348.9 575 364.2 573.4 365.4 579.9 373 577 373.2 585.8 388.7 589.6 397 591.6 402.8 593.6 407.4 593.9 415.2 591.3 417.7 589.8 425 590.9 427.4 585.7 431.8 579.2 431.3 579.9 429.6 582.2 427.7 578 426.4 580.9 423.5 580.5 420.5 573.5 419.7 562.2 412.4 560.9 407.8 557.3 404 554.3 399.1 554.3 396 557 392.9 557.4 386.8 553.9 390.4 550.9 388.5 552.2 371.7 548.7 366.4 544.7 367.8 544.1 363.1 540.1 361.1 539.9 358.7 534.1 357.7 533.3 354.7 529 353.3 521.9 358.8 512 362.2 507.2 355.1 504.5 353.9 501.5 352.2 495.7 352.7 492 354.1 485 355.2 486.1 349.2 480.4 354 479.3 343.4 514.5 341.1 516.3 344.7 555.7 343.2 557.6 346"></polygon>
														<polygon id="path4739_00000142868824488278684260000002728617178164708224_" stroke="url(#linearGradient-25)" fill="#CCCCCC" fill-rule="nonzero" points="72.9 3.55271368e-15 134.7 15.9 119.7 62.5 96.5 56.4 68.8 55.5 54.6 49.7 54.6 43.7 53.8 40.7 44.9 36.1 41.2 34.6 41.7 28.5 42.6 28.4 42.6 34.1 46.3 29.3 45.8 26.7 43.7 24.6 47.7 11.9 46.9 7.4 47.6 0.4 57.2 9.3 68.2 12.1 65.8 26.4 66.3 26.6 71.2 18.5 74.5 19 73.5 12.5 74.2 4.7"></polygon>
														<polygon id="path4755_00000041262854721575099740000011686208145752014267_" stroke="url(#linearGradient-26)" fill="#CCCCCC" fill-rule="nonzero" points="649.1 78.2 649.3 83.3 650.5 85.7 650 88.4 646.7 91.5 647.4 96.6 646.2 104.9 647 110.4 647.4 113.2 647.4 116.9 637.6 119.2 634.1 106.4 632.9 107.7 630.7 99.8 630.8 94 627.7 84"></polygon>
														<polygon id="path4761_00000086687220287444848830000014581880580297855372_" stroke="url(#linearGradient-27)" fill="#CCCCCC" fill-rule="nonzero" points="269.1 91.2 355.6 96.7 356.3 107.3 356.3 137.5 353.1 137.3 356 142.4 355.8 148.4 356.3 153.5 344.6 148.9 336.9 151.4 325.4 147.6 314.5 143.4 263.5 140 267.2 107.3"></polygon>
														<g id="CA" transform="translate(-0.000000, 102.100000)">
															<polygon id="Path" fill="#808080" fill-rule="nonzero" points="14.4 -2.84217094e-14 65 16 52.2 57 54 58.5 50.7 65 104.7 147 108.3 158.2 101.3 167.3 98.1 175.4 100.8 182.6 96.5 183.2 62.1 179.6 62.1 176.9 59.4 176.8 62.3 169.4 56.7 162.4 57.7 157.7 48.2 157.5 50.8 152.1 34.6 139.8 23.6 136.5 21.7 132 22.8 117.9 18 111.8 12.9 98 12.7 93.7 9.7 91.9 11.5 77.7 13 75.7 16.7 78 15.9 71.1 26.2 70.5 26.2 69.9 15.8 68.4 10.4 71.4 7.6 70.3 6.1 68 9.6 64.4 3.6 52.3 -1.77635684e-15 51.3 4 47.6 6.1 37.1 1.9 25.9 8.9 18.2 9.7 13 13 5.8 11.3 1.1"></polygon>
															<polygon id="Path" stroke="url(#linearGradient-28)" points="14.4 -2.84217094e-14 65 16 52.2 57 54 58.5 50.7 65 104.7 147 108.3 158.2 101.3 167.3 98.1 175.4 100.8 182.6 96.5 183.2 62.1 179.6 62.1 176.9 59.4 176.8 62.3 169.4 56.7 162.4 57.7 157.7 48.2 157.5 50.8 152.1 34.6 139.8 23.6 136.5 21.7 132 22.8 117.9 18 111.8 12.9 98 12.7 93.7 9.7 91.9 11.5 77.7 13 75.7 16.7 78 15.9 71.1 26.2 70.5 26.2 69.9 15.8 68.4 10.4 71.4 7.6 70.3 6.1 68 9.6 64.4 3.6 52.3 -1.77635684e-15 51.3 4 47.6 6.1 37.1 1.9 25.9 8.9 18.2 9.7 13 13 5.8 11.3 1.1"></polygon>
														</g>
														<polygon id="path4795_00000160182189168305528880000006455174992882285716_" stroke="url(#linearGradient-29)" fill="#CCCCCC" fill-rule="nonzero" points="500.5 160.8 500.5 162.2 505.6 204.2 504.8 209.2 498.2 213.2 497.9 216.7 491.6 223.9 487 220.9 484.9 226 480.4 226.5 478.1 227.8 473.3 226.5 469.1 227.6 468.4 229.9 465.7 230 468.3 219.4 470.8 210.9 467.2 163.7 470.2 165.1 473.8 163.1"></polygon>
														<polygon id="path4797_00000036953384348470570680000003098972221171851171_" stroke="url(#linearGradient-30)" fill="#CCCCCC" fill-rule="nonzero" points="197.7 165 259.6 173.2 259.6 173.2 284.8 175.7 283.4 191.9 278.7 241.4 278.7 241.4 278.7 241.6 265.6 240.4 188.1 230"></polygon>
														<polygon id="DE" class="nation-state no-modal" stroke="url(#linearGradient-31)" fill="#808080" fill-rule="nonzero" points="624.5 175.7 626.6 178.4 626 179.7 627.6 180.4 627.4 181.3 630.6 184.6 631.8 188.4 633.5 189.8 634.2 191.7 637.3 192.5 637.9 193.7 636.2 194 637.3 195.3 635.2 196.9 639.1 197.2 638.8 198.5 630.2 200 623.7 177.2"></polygon>
														<polygon id="path4803_00000090260258135168014280000007189523262304996021_" stroke="url(#linearGradient-32)" fill="#CCCCCC" fill-rule="nonzero" points="558.3 185.3 558.6 187.8 572.5 185.5 573.7 196.8 576.1 195.6 578.9 190.3 584.4 186.2 593.5 185.6 595.1 188.6 590.5 194 588.1 194.6 586.8 198.3 583.1 201.8 579.4 207.2 573.5 205.9 573.7 210.8 569.7 212.5 566.1 216.1 564.7 222.2 559.3 222.2 557 224.7 553.7 222.7 550 228.4 543.1 223.4 539.2 219.4 539 215.5 540.3 212.3 540.4 212.3 540.7 209.3 542.8 207.2 543.3 203 546.9 202.5 548 196.6 550.9 196.1 556 186.3"></polygon>
														<polygon id="path4805_00000023275580869295143230000002912506223472884617_" stroke="url(#linearGradient-33)" fill="#CCCCCC" fill-rule="nonzero" points="414.1 186.5 419.1 191.2 420.1 201.3 430.3 211.9 436.2 214.5 437 219.2 434.8 223.3 445.2 233.2 446.9 242 451.6 244.7 452.8 247.6 451.2 249.5 447.3 249.7 446.9 252.7 445.8 258.1 439.9 258.4 438.6 251.9 378.3 253.2 378.5 245.4 377.6 210.6 373.4 205.7 376 199.8 369.3 194.3 367.3 187"></polygon>
														<polygon id="path4815_00000029006580991697886800000009600967731281842822_" stroke="url(#linearGradient-34)" fill="#CCCCCC" fill-rule="nonzero" points="630.2 229.8 634.5 237.4 629.5 231.8 628.1 233.2 630.1 236.3 628.9 237.2 625 235.8 624.2 237.7 625 238.5 620.2 240.6 620.2 243.4 626.7 240.9 628.9 239.5 629.7 243.5 632.1 243.6 631.9 238.9 632.6 238.6 634.4 243 633.4 245.2 626.5 245.6 627.7 247 631.7 247.1 631.9 248.8 628.8 250.6 627.8 251.3 624.4 248.1 622.7 248.3 623.5 250.9 620.1 250.5 617.8 253 621.3 253.7 627 253 626 255 623.5 256.2 619 254.7 621.1 257.6 624.4 257.9 628.2 255.6 630.7 255.7 629.9 259 624.6 260.2 620.4 262.1 616.9 262.8 612.7 266.8 615.8 267 613.3 269.7 613.6 270.9 611.5 274.1 612.1 278.4 607.4 273.5 608.4 278.2 604.5 277.6 603.5 279.7 601.6 280.5 583.8 266.6 570.6 268.6 562.7 264.4 545.4 265.9 537 270.1 516.9 272.1 523.2 267.2 528.9 265.1 539.5 256.4 547.3 250.6 548.5 248.8 551.7 246.4 554.4 241.9"></polygon>
														<polygon id="path4833_00000071525351514130469320000013439357345108576436_" stroke="url(#linearGradient-35)" fill="#CCCCCC" fill-rule="nonzero" points="440.1 276.4 465.6 276.4 467 279.7 465.3 329.8 466.4 354.6 456.5 354.8 452 357.2 447.7 350.4 447.4 343.9 421.7 345.7 431.2 322.8 429 311.5 430.3 306.2 428.3 298.6"></polygon>
														<polygon id="path4749_00000129191704280777987650000012622282824961195967_" stroke="url(#linearGradient-36)" fill="#CCCCCC" fill-rule="nonzero" points="275.1 41.6 349.9 46.4 348.8 50.5 350.3 56.1 350.3 58.4 354 76.7 355.5 96.1 269.1 90.6"></polygon>
														<polygon id="path4765_00000175317346971089705370000007629808587075648898_" stroke="url(#linearGradient-37)" fill="#CCCCCC" fill-rule="nonzero" points="454.4 67.9 455.5 70.2 447.9 75.4 448.3 82.9 451.3 79.7 460.5 84.5 465.3 84.3 470.4 86.4 470.9 83.4 477.7 79.8 487.6 77.4 487.4 81.9 489.8 82.8 494.9 81.8 502.3 89.2 492.4 89.8 492.1 92.9 490 90.5 483 88.5 473.7 92.9 471.2 99.2 470.5 94.4 465.3 96.9 461.6 103 460.6 109.2 454.6 97.4 439 89.9 433.6 90.2 428.4 85.9 430.1 82.7 443.6 77.4 443.6 74.1"></polygon>
														<polygon id="path4767_00000033354481384600594630000010070296926671522975_" stroke="url(#linearGradient-38)" fill="#CCCCCC" fill-rule="nonzero" points="495.5 93.5 499.2 96.3 504.3 98 509 98.5 512.3 103.6 510.5 104 513.3 113.1 511.8 120.9 508.3 122.3 507 127.4 510.9 129.1 514.9 125.2 514.7 122.6 516.5 122.9 519.9 120.6 522.4 121.4 526.2 128.8 527.7 136.4 529.1 141.5 527.9 144.9 525.8 144.9 524.1 154.5 521.7 159.6 501 162 501 160.4 474.3 162.5 479.7 156.2 481.4 139.6 476.3 132.1 475.6 126.1 477.4 118.8 476.7 114 481.4 110 485.7 104.6 485.6 110.5 488.2 110.5 489.1 106.7 488.5 103 492.9 100.2 491.8 96.4"></polygon>
														<polygon id="path4769_00000024707235621810648780000014103881609403019707_" stroke="url(#linearGradient-39)" fill="#CCCCCC" fill-rule="nonzero" points="186.3 95.6 266.6 107.3 259.1 172.6 197.5 164.4 173 159.8 176.1 144.2 184.9 103.3 184.9 103.3"></polygon>
														<polygon id="path4775_00000036949998777052950070000017844743720544733629_" stroke="url(#linearGradient-40)" fill="#CCCCCC" fill-rule="nonzero" points="65.6 118.3 104 128.7 104.2 128.8 104.2 128.8 138.8 136.4 120 218.2 120 218.2 119.9 218.4 119.9 218.4 117.1 231.4 114.4 228.7 108.1 228.2 104.9 238.4 106.4 245.7 105 248.5 51.4 167.2 54.7 160.5 52.8 159"></polygon>
														<g id="IA" transform="translate(337.338400, 121.588200)">
															<image id="Bitmap" opacity="0.5" x="0" y="0" width="113" height="85" xlink:href="data:image/png;base64,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"></image>
															<g id="Group" transform="translate(16.661600, 16.411800)">
																<polygon id="Path" fill="#808080" fill-rule="nonzero" points="0 0 2.8 0.1 2.8 0.1 65.2 0.3 66.8 3.6 66 10.7 72.1 15.7 79.5 24.1 80.4 26.2 69.7 37.3 69.5 42.7 65.2 52.5 60.3 47.9 13 48.6 9 44.1 8.5 34.7 5.2 25.2 2.8 15.9 2.3 10.4 2.5 4.3"></polygon>
																<polygon id="Path" stroke="url(#linearGradient-41)" points="0 0 2.8 0.1 2.8 0.1 65.2 0.3 66.8 3.6 66 10.7 72.1 15.7 79.5 24.1 80.4 26.2 69.7 37.3 69.5 42.7 65.2 52.5 60.3 47.9 13 48.6 9 44.1 8.5 34.7 5.2 25.2 2.8 15.9 2.3 10.4 2.5 4.3"></polygon>
															</g>
														</g>
														<polygon id="path4785_00000175286160672105604570000002960734842921304504_" stroke="url(#linearGradient-42)" fill="#CCCCCC" fill-rule="nonzero" points="615.7 139.2 620.6 143.1 621.9 146.4 626 148 626.6 150 624.8 152.4 624.6 161.7 629.5 166.3 629.5 169.1 626.3 171.6 624.3 175.2 623.2 176.8 559.2 187.2 558.9 185.1 558.9 185.1 554 151.5 561.7 146.7 562.3 149.9"></polygon>
														<polygon id="path4809_00000018939545919768965530000009204496221531863470_" stroke="url(#linearGradient-43)" fill="#CCCCCC" fill-rule="nonzero" points="283.9 191.9 369 194.9 375.3 200.1 372.7 205.9 377 210.9 377.9 245.2 279.2 240.8"></polygon>
														<polygon id="path4811_00000146460321803969087230000001840989597673604010_" stroke="url(#linearGradient-44)" fill="#CCCCCC" fill-rule="nonzero" points="506.2 204.5 518.7 207.2 521.6 208.9 528.2 209.6 531.1 208.3 536 211.9 539.9 212.1 538.6 215.2 538.8 219.5 542.8 223.6 542.1 227.6 532.4 236.2 531.9 238.3 524.7 244.7 463.6 248.9 465.3 251.1 447.4 252.5 447.7 250.3 451.4 250.1 453.4 247.7 452.1 244.5 454.3 240.6 460.6 241.6 463.7 237.9 465.8 230.4 469.1 230.2 469.8 227.8 473.6 226.9 478.5 228.2 480.9 226.8 485.7 226.3 487.6 221.5 492 224.4 498.7 216.7 499 213.3 505.6 209.3"></polygon>
														<polygon id="path4817_00000111175069065466476770000000856207409427477163_" stroke="url(#linearGradient-45)" fill="#CCCCCC" fill-rule="nonzero" points="187.9 230.5 265.2 240.9 264.5 248.7 258.2 322.6 210.3 317.5 209.6 321.3 185.6 317.5 184.1 324.5 174 322.9"></polygon>
														<polygon id="path4825_00000036961904824957427890000000064878771239766172_" stroke="url(#linearGradient-46)" fill="#CCCCCC" fill-rule="nonzero" points="438.2 252.5 439.5 259 445.6 258.7 445.6 262.6 440.8 271.9 439.6 276 427.8 298.4 429.8 306.1 428.5 311.1 385.7 311.5 385.9 303.4 381.2 301.6 378.2 253.9"></polygon>
														<polygon id="path4827_00000069387970522363058930000002176650130999441572_" stroke="url(#linearGradient-47)" fill="#CCCCCC" fill-rule="nonzero" points="562.4 265.2 570.3 269.4 583.5 267.4 601 281.1 595.3 287.9 594.7 291.7 591.6 296.9 588.8 294.7 587.9 300 580 307.2 578.4 306.5 572.8 308.1 577.2 311.2 569.9 312.4 567 308.8 562.8 302.8 535.1 274.6 537.1 270.7 545.3 266.6"></polygon>
														<polygon id="path4831_00000007408476862474388000000007239244109749960629_" stroke="url(#linearGradient-48)" fill="#CCCCCC" fill-rule="nonzero" points="502.6 274.5 509.9 307.7 515.5 317.4 512.9 328.6 514.5 340.5 478.8 342.8 480 354.3 473.5 356.3 476 354.1 472.6 341.2 472 341.2 470.7 353.1 467.1 354.4 466 329.7 467.7 279.5 466.3 276.3"></polygon>
														<rect id="rect4927_00000016760998878758570470000017820956763313442734_" stroke="url(#linearGradient-49)" stroke-width="0.999953379" fill="#CCCCCC" fill-rule="nonzero" transform="translate(605.814370, 194.868630) rotate(-8.488267) translate(-605.814370, -194.868630) " x="604.664424" y="193.718684" width="2.29989277" height="2.29989277"></rect>
														<g transform="translate(562.100000, 84.200000)">
															<polygon class="nation-state" id="NY" fill="#808080" fill-rule="nonzero" points="65.2 -1.42108547e-14 68.3 9.9 68.2 15.6 70.7 24.6 71.9 23.3 75.1 35.4 75.6 48.4 78.6 62.6 77.3 64.6 77.8 66.6 76.4 68.4 76.8 70.5 83.7 65.1 93.3 59.5 94 61.3 92 63.4 95 63 98.9 59.6 99.9 60.9 86.3 71.1 85.6 70.5 91.6 66 89.4 65.8 76.6 73.9 75.2 72.6 76 68.5 75.4 66.7 64.2 63.3 60.2 61.7 59 58.5 53.8 54.4 0.5 64.9 0 62 9.6 50.5 7.9 47.5 6.1 45.2 6.1 42.6 19.5 38.7 23.4 39.9 30.8 38.2 38.3 31.6 36.3 26.9 37.3 24.5 34.5 23.1 45.8 5.6 49.2 4.4"></polygon>
															<polygon id="Path" stroke="url(#linearGradient-50)" points="65.2 -1.42108547e-14 68.3 9.9 68.2 15.6 70.7 24.6 71.9 23.3 75.1 35.4 75.6 48.4 78.6 62.6 77.3 64.6 77.8 66.6 76.4 68.4 76.8 70.5 83.7 65.1 93.3 59.5 94 61.3 92 63.4 95 63 98.9 59.6 99.9 60.9 86.3 71.1 85.6 70.5 91.6 66 89.4 65.8 76.6 73.9 75.2 72.6 76 68.5 75.4 66.7 64.2 63.3 60.2 61.7 59 58.5 53.8 54.4 0.5 64.9 0 62 9.6 50.5 7.9 47.5 6.1 45.2 6.1 42.6 19.5 38.7 23.4 39.9 30.8 38.2 38.3 31.6 36.3 26.9 37.3 24.5 34.5 23.1 45.8 5.6 49.2 4.4"></polygon>
														</g>
													</g>
												</g>
											</svg>
											<div class="reveal map-location-reveal" id="locations-map-modal" data-reveal>
												<div class="top">
												<div class="grid-x align-right">
													<button class="close-button" data-close aria-label="Close modal" type="button">
														<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><g id="Icon_ionic-ios-close-circle-outline" data-name="Icon ionic-ios-close-circle-outline" transform="translate(-3.375 -3.375)"><path id="Path_55" data-name="Path 55" d="M26.316,24.289,21.586,19.56l4.729-4.729A1.434,1.434,0,0,0,24.288,12.8l-4.729,4.729L14.829,12.8A1.434,1.434,0,0,0,12.8,14.831L17.53,19.56,12.8,24.289a1.387,1.387,0,0,0,0,2.028,1.425,1.425,0,0,0,2.028,0l4.729-4.729,4.729,4.729a1.441,1.441,0,0,0,2.028,0A1.425,1.425,0,0,0,26.316,24.289Z" transform="translate(-0.181 -0.182)" fill="#aaa"/><path id="Path_56" data-name="Path 56" d="M19.375,5.529A13.841,13.841,0,1,1,9.583,9.583a13.755,13.755,0,0,1,9.792-4.054m0-2.154a16,16,0,1,0,16,16,16,16,0,0,0-16-16Z" fill="#aaa"/></g></svg>
													</button>
												</div>
												<div class="grid-x align-center">
													<div class="cell">
														<?php swarm_locations_nav(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="on-page-locations-wrap text-left">
											<div class="hide-for-tablet grid-x align-center">
												<button class="button white" data-toggle="on-page-locations-dropdown">
													<div class="grid-x align-middle align-center">
														<span>Team Locations</span>
														<svg xmlns="http://www.w3.org/2000/svg" width="14.107" height="9.142" viewBox="0 0 14.107 9.142"> <path id="Path_1172" data-name="Path 1172" d="M879.509,3104.144l6,5.962,6-5.962" transform="translate(-878.451 -3103.08)" fill="none" stroke="#000" stroke-width="3"/></svg>
													</div>
												</button>
												<div class="dropdown-pane text-center" id="on-page-locations-dropdown" data-position="bottom" data-alignment="center" data-dropdown data-auto-focus="true">
													<div class="white-bg display-on-load">
														<?php swarm_locations_nav(); ?>
													</div>
												</div>
											</div>
											<div class="show-for-tablet display-on-load">
												<?php swarm_locations_nav(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
												
						<?php 
							if( !empty($fields['cta_background_image']) ) {
								$cta_bg_img = $fields['cta_background_image'];
								get_template_part('template-parts/content', 'cta-background-image',
									array(
										'cta_bg_img' => $cta_bg_img,
									)
								);
							}
						?>

						<section class="testimonials-slider-section relative">
							<div class="grid-container">
								<div class="grid-x grid-padding-x relative align-middle">
									<div class="cell small-12 tablet-6">
										<?php if( !empty( $fields['ts_image'] ) ) {
											$imgID = $fields['ts_image']['ID'];
											$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
											$img = wp_get_attachment_image( $imgID, 'half-container', false, [ "class" => "", "alt"=>$img_alt] );
											echo '<div class="img-wrap">';
											echo $img;
											echo '</div>';
										}?>
									</div>
										
									<div class="testimonials-text-slider-wrap cell small-12 tablet-6 large-5 large-offset-1">
										<?php if( !empty( $fields['testimonials_header'] ) ):?>
											<h2><?php echo $fields['testimonials_header'];?></h2>
											<svg width="49" height="44" xmlns="http://www.w3.org/2000/svg"><text transform="translate(-5 -29)" fill="#212020" fill-rule="nonzero" font-family="GoodHeadlinePro-NarrBold, Good Headline Pro" font-size="212" font-weight="bold"><tspan x="0" y="179">“</tspan></text></svg>
										<?php endif;?>
										<?php if ($testimonial_slides = $fields['testimonials_slider']):?>
										<div id="testimonials-text-slider" class="overflow-hidden">
											<div class="swiper-wrapper">
												<?php foreach($testimonial_slides as $testimonial_slide):?>
												<div class="cell swiper-slide">
													<div class="inner">
														<?php if( !empty($testimonial_slide['quote']) ):?>
															<p class="quote">
																<?php echo $testimonial_slide['quote'];?>
															</p>
														<?php endif;?>
														<?php if( !empty($testimonial_slide['name']) ):?>
															<p class="name">
																<i>– <?php echo $testimonial_slide['name'];?></i>
															</p>
														<?php endif;?>
													</div>
												</div>
												<?php endforeach;?>
											</div>
											<div class="testimonials-text-swiper-pagination text-right"></div>
										</div>
										<?php endif;?>
									</div>
								</div>
							</div>
						</section>
						
					</div> <!-- end article section -->
							
					<footer class="article-footer">
						<?php get_template_part('template-parts/content', 'prefooter');?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();