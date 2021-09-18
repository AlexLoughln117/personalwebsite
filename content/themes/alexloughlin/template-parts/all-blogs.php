


<section class="games-ctn blog-ctn">
    <div class="container">
        <div class="all-games">

        <div class="blog-header">
            <h1 class="" style=""><?php echo get_the_title() ?></h1>
        </div>

             <?php   $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'thoughts',
                    'posts_per_page' => -1,
                );
                $arr_posts = new WP_Query( $args );
                
                if ( $arr_posts->have_posts() ) :
                
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php
                            if ( has_post_thumbnail() ) :
                                // the_post_thumbnail();
                            endif;
                            ?>
                             <div class="tags">
                            <?php $post_tags = get_the_tags();
 
                                if ( $post_tags ) {
                                    foreach( $post_tags as $tag ) { ?>
                                   <div class="single-tag"><?php echo $tag->name ; ?></div> 
                                   <?php }
                                } ?>
                            </div>
                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title(); ?></h2>
                            </header>
                            <div class="post-meta">
                              <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                            </div>
                            <hr>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                endif; ?>
        </div>
    </div>
</section>