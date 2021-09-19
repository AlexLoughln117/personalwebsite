<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexloughlin
 */

// get_template_part( 'template-parts/page-header' );

?>

<div class="container">
    
    <div class="archive-all">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif; ?>

                    
                </header><!-- .entry-header -->

                <?php ///alexloughlin_post_thumbnail(); ?> 

                <div class="entry-content">
                                    <div class="post-meta">
                                        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                                        </div>
                                        <hr>
                                        <div class="entry-content">
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink(); ?>">Read More</a>
                                        </div>

                <?php	wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alexloughlin' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php // alexloughlin_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

    </div>

</div>