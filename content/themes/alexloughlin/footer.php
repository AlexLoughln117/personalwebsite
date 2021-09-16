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
					<a target="_blank" rel="noopener noreferrer"  class="page-link" href="https://twitter.com/Alex_117">
					Twitter
					</a>
					<a target="_blank" rel="noopener noreferrer"  class="page-link" href="https://instagram.com/alexloughlin_117/">
					Instagram
					</a>
					<a target="_blank" rel="noopener noreferrer"  class="page-link" href="http://vsco.co/alexloughlin">
					VSCO
					</a>
		     </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
