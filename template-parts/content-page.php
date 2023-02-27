<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package swarm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
    <div class="content">
        <div class="inner-content">
        
            <main id="primary" class="site-main">
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                    <header class="entry-header text-center has-bg">
                        <div class="bg bg-gradient gradient-top"></div>
                        <div class="bg hex hero-bg-hex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/big-hex.svg);"></div>
                        <div class="grid-container relative">
                            <div class="grid-x grid-padding-x align-bottom">
                                <div class="cell">
                                    <h1 class="white-color">
                                        <?php if( !empty( $fields['alternative_banner_heading'] ) ):?>
                                            <?php echo $fields['alternative_banner_heading'];?>
                                        <?php else:?>
                                            <?php the_title();?>
                                        <?php endif;?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </header><!-- .entry-header -->
                
                    <div class="entry-content default-content">
                        <div class="grid-x grid-padding-x align-center">
                            <div class="cell small-12 large-10">
                    
                                <?php the_content();?>
                                
                            </div>
                        </div>
                    </div><!-- .entry-content -->
                    
                    <footer class="entry-footer">
                    
                    </footer><!-- .entry-footer -->
                    
                </article><!-- #post-<?php the_ID(); ?> -->
            
            </main><!-- #main -->
        
        </div>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
