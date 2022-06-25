<?php
/**
 * Template Name: Work Template
 */

get_header(); ?>

<section class="cd-hero work-header"  <?php if ( has_post_thumbnail() ) { ?>
    style=" background:linear-gradient(0deg, rgba(46, 49, 49, 0.3), rgba(46, 49, 49, 0.3)), url(<?php echo the_post_thumbnail_url('full') ?> );
<?php } ?> ">
              <div class="container">
                  <div class="cd-hero-content animate__animated ">
                    <div class="hero---title Hero-playing">
                            <h1 class="" style="">
                            <?php echo get_the_title() ?></h1>
                            <?php if( get_field('subtitle') ): ?>
                                 <p style=""> <?php the_field('subtitle'); ?></p>
                            <?php endif; ?>
                           <?php if ( 'post' === get_post_type() ) :
                                ?>
                                <div class="entry-meta">
                                    <?php
                                    alexloughlin_posted_on();
                                    ?>
                                </div><!-- .entry-meta -->
                            <?php endif; ?>
                            <a class="header-link" style="color:#fff!important;" href="https://alexloughlin.com/content/uploads/2022/06/CV-AlexLoughlin-2022.pdf" target="_blank">View CV</a>
                    </div>
                    <?php if( get_field('logo') ): ?>
                       <?php   
                        $logo = get_field('logo');
                        $logo_url_image = $logo['url'];
                        $logo_alt_image = $logo['alt'];
                       ?>
                       <div class="header-logo-ctn">
                           <img class="header-logo" src="<?php echo $logo_url_image; ?>" alt="<?php echo $logo_alt_image; ?>">
                       </div>
                   <?php endif; ?>
                  </div>
                 
              </div>      
</section>

<?php 

get_template_part( 'template-parts/all-work' );

get_footer();

?>