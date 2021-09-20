<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alexloughlin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65018583-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-65018583-1');
	</script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alexloughlin' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">AVL</a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">AVL</a></p>
					<?php
				endif;
				$alexloughlin_description = get_bloginfo( 'description', 'display' );
				if ( $alexloughlin_description || is_customize_preview() ) :
					?>
					
				<?php endif; ?>
			</div><!-- .site-branding -->

			 <nav id="site-navigation" class="main-navigation">
				 <div class="menu-ctn" id="menulinks">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'main-menu',
							)
						);
						?>
				 </div>
				<a href="javascript:void(0);" class="icon menu-icon" onclick="myFunction()">
					<p class="fa fa-bars">Menu</p>
				</a>
			</nav><!-- #site-navigation --> 
		</div>
		<div class="mobile-menu" id="mobmenu">
	           	<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'main-menu',
							)
						);
						?>
		</div>
	</header><!-- #masthead -->


	<script>
		function myFunction() {
		var x = document.getElementById("mobmenu");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
		}
</script>