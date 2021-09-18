<?php
/**
 * Template Name: Home Page Template
 */

get_header();

?>

<style type="text/css">
* {
  box-sizing: border-box;
}

html {
  -ms-scroll-snap-type: mandatory;
      scroll-snap-type: mandatory;
  -ms-scroll-snap-points-y: repeat(100vh);
      scroll-snap-points-y: repeat(100vh);
  -ms-scroll-snap-type: y mandatory;
      scroll-snap-type: y mandatory;
}
</style>

<?php 
        if( have_rows('sections') ): ?>

                <?php while( have_rows('sections') ) : the_row(); 
                    
                    $backgroundcolour = get_sub_field('colour');
                    $gradient = get_sub_field('background_gradient');
                
                ?>

                <?php if( get_sub_field('link') ): ?>
                        <a class="section-real-link" href="<?php echo get_sub_field('link'); ?>">
                 <?php endif; ?>

                <section id="" class="section home-section-<?php echo get_row_index(); ?>" style="background-color:<?php echo $backgroundcolour ?>;<?php echo $gradient ?>">
                        <div class="section-inner">
                                <h2 class=""><?php echo get_sub_field('title'); ?></h2>
                                <h3><?php echo get_sub_field('copy'); ?></h3>
                                <?php if( get_sub_field('link') ): ?>
                                    <p class="section-fake-link"><?php echo get_sub_field('link_text'); ?>   ></p>
                                <?php endif; ?>
                        </div>
                        <div class="scroll-ctn">
                             <div class="icon-scroll"></div>
                        </div>
                </section>

                <?php if( get_sub_field('link') ): ?>
                        </a>
                 <?php endif; ?>

                <?php endwhile; ?>


        <?php else :
        // Do something...
        endif; 
?>

<script type="text/javascript">
	// const gra = function (min, max) {
	// return Math.random() * (max - min) + min;
	// 	};
	// 	const init = function () {
	// 		let items = document.querySelectorAll("section");
	// 		for (let i = 0; i < items.length; i++) {
				
	// 		}
	// 		cssScrollSnapPolyfill();
	// 	};
	// 	init();
             
</script>


<?php
get_footer();