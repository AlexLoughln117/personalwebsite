<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alexloughlin
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
            <hr style="background-image: linear-gradient( 135deg, #F97794 0%, #623AA2 100%);height: 1px;">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">AVL</a>
			<div class="footer-col socials">
					<a target="_blank" rel="noopener noreferrer" class="page-link" href="mailto:aloughlin711@gmail.com">
					Email
					</a>
					<a target="_blank" rel="noopener noreferrer"  class="page-link" href="https://www.linkedin.com/in/alex-loughlin-806626124/">
					Linkedin
					</a>
					<a target="_blank" rel="noopener noreferrer"  class="page-link" href="https://instagram.com/alexloughlin_117/">
					Instagram
					</a>
		     </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="fab-wrapper">
  <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
  <label class="fab" for="fabCheckbox">
    <span class="fab-dots fab-dots-1"></span>
    <span class="fab-dots fab-dots-2"></span>
    <span class="fab-dots fab-dots-3"></span>
  </label>
  <div class="fab-wheel">
    <a class="fab-action fab-action-1" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/assets/icons/home.png" alt="">
    </a>
    <a class="fab-action fab-action-2" href="mailto:aloughlin711@gmail.com">
	   <img src="<?php echo get_template_directory_uri() ?>/assets/icons/message.png" alt="">
    </a>
    <a class="fab-action fab-action-3" href="https://www.linkedin.com/in/alex-loughlin-806626124/">
		  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/linkedin.png" alt="">
    </a>
    <!-- <a class="fab-action fab-action-4">
      <i class="fas fa-info"></i>
    </a> -->
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
