<section class="games-ctn">
    <div class="container">
        <div class=" all-work-ctn">

             <?php   $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'work',
                    'posts_per_page' => -1,
                );
                $arr_posts = new WP_Query( $args );
                
                if ( $arr_posts->have_posts() ) :
                
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="single-work">
                        <article id="post-<?php the_ID(); ?>" >
                            <?php if( get_field('logo') ): ?>
                                <?php   
                                    $logo = get_field('logo');
                                    $logo_url_image = $logo['url'];
                                    $logo_alt_image = $logo['alt'];
                                ?>
                                <div class="allwork-logo-ctn">
                                    <img class="header-logo" src="<?php echo $logo_url_image; ?>" alt="<?php echo $logo_alt_image; ?>">
                                </div>
                            <?php endif; ?>
                            <!-- <div class="tags">
                            <?php $post_tags = get_the_tags();
                                if ( $post_tags ) {
                                    foreach( $post_tags as $tag ) { ?>
                                   <div class="single-tag"><?php echo $tag->name ; ?></div> 
                                   <?php }
                                } ?>
                            </div> -->
                            <header class="entry-header">
                                <h2 class="entry-title"><?php the_title(); ?></h2>
                            </header>
                            <!-- <div class="post-meta">
                              <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                            </div> -->
                           
                            <div class="entry-content">
                                <?php if( get_field('subtitle') ): ?>
                                    <p><?php echo get_field('subtitle'); ?></p>
                                <?php endif; ?>
                                <hr>
                                <p class="section-fake-link">Read More</p>
                            </div>
                        </article>
                         </a>
                        <?php
                    endwhile;
                endif; ?>
        </div>
    </div>
</section>