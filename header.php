<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php the_title(); ?> - Arcandia Records</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Arcandia Records">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Oswald:200,400" rel="stylesheet">
	<script src="https://use.fontawesome.com/004cde6c76.js"></script>

	<style>
		.footer-01{background-image: url('<?php echo get_theme_mod('footer2_logo', get_stylesheet_directory_uri().'/img/logo-msm-fr.png'); ?>');}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111434061-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-111434061-1');
	</script>


<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


	<div class="language">
		<p id="langue-titre"><a href="<?php echo get_theme_mod('langue_url', '#'); ?>"><?php echo get_theme_mod('langue_titre', 'English'); ?></a></p>
	</div>
	<!-- /.language -->

	<header>
		<div class="wrapper-header">
			<div class="logo">
				<img src="<?php echo get_theme_mod('bandeau_logo', get_stylesheet_directory_uri().'/img/logo-arcandia.png'); ?>" alt="Arcandia Records" title="Arcandia Records" />
			</div>
			<!-- /.logo -->

			<div class="header-text">
				<h2 id="ligne1"><?php echo get_theme_mod('bandeau_ligne1', 'Concerts de musique classique au Mont-Saint-Michel'); ?></h2>
				<h3 id="ligne2"><?php echo get_theme_mod('bandeau_ligne2', 'Albums CD d\'enregistrements exclusifs réalisés au coeur de l\'Abbaye'); ?></h3>
			</div>
			<!-- /.header-text -->
		</div>
		<!-- /.wrapper-header -->
	</header>

	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>


 		<?php
	        wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'depth'             => 2,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'navbarSupportedContent',
	            'menu_class'        => 'navbar-nav mr-auto',
	            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'            => new WP_Bootstrap_Navwalker())
	        );
        ?>

		<a class="navbar-brand" href="<?php echo get_theme_mod('panier_btn_url', '#'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <?php echo get_theme_mod('panier_btn_titre', 'Mon Panier'); ?></a>
	</nav>





<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
