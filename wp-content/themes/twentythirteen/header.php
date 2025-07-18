<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="hfeed site">
		<a class="screen-reader-text skip-link" href="#content">
			<?php
			/* translators: Hidden accessibility text. */
			_e( 'Skip to content', 'twentythirteen' );
			?>
		</a>
		<header id="masthead" class="site-header">
			<?php
			$is_front         = ! is_paged() && ( is_front_page() || ( is_home() && ( (int) get_option( 'page_for_posts' ) !== get_queried_object_id() ) ) );
			$site_name        = get_bloginfo( 'name', 'display' );
			$site_description = get_bloginfo( 'description', 'display' );

			?>
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" <?php echo $is_front ? 'aria-current="page"' : ''; ?>>
				<?php if ( $site_name ) : ?>
					<h1 class="site-title"><?php echo $site_name; ?></h1>
				<?php endif; ?>
				<?php if ( $site_description ) : ?>
					<h2 class="site-description"><?php echo $site_description; ?></h2>
				<?php endif; ?>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'nav-menu',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
