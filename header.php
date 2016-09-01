<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adventure Us
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts Links -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

<!-- Font Awesome Embed -->
<script src="https://use.fontawesome.com/1a73dbe823.js"></script>

<!-- Jquery Call -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $( '.search-icon' ).click(function() {
    $( '.header-search-bar' ).css({
       opacity: 0,
       display: 'inline-block'
   }).animate({opacity:1},600);
    $( '.search-icon' ).css( 'display' , 'none' );
    $( '.search-icon-close' ).css( 'display' , 'inline-block' );
  });
  $( '.search-icon-close' ).click(function () {
    $( '.header-search-bar' ).css( 'display' , 'none' );
    $( '.search-icon-close' ).css( 'display' , 'none' );
    $( '.search-icon' ).css( 'display' , 'inline-block' );
  })

});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adventure_us' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <div class="container">
            <?php if ( get_theme_mod( 'site_logo' ) ) : ?>
          <div class='site-logo'>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'site_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
          </div>
      <?php else : ?>
         <div class="site-branding-title">
              <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
        </div>
      <?php endif; ?>


        <div class="header-search">
          <div class="header-search-bar">
            <?php get_search_form(); ?>
          </div>
          <i class="fa fa-search search-icon" aria-hidden="true"></i>
          <i class="fa fa-times search-icon-close" aria-hidden="true"></i>
        </div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'adventure_us' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

    </div><!-- .container -->
	</header><!-- #masthead -->




	<div id="content" class="site-content">
