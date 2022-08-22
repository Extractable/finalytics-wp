<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finalytics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--  <link rel="apple-touch-icon" sizes="180x180" href="--><?php //echo get_template_directory_uri()?><!--/src/img/favicon/apple-touch-icon.png">-->
<!--  <link rel="icon" type="image/png" sizes="32x32" href="--><?php //echo get_template_directory_uri()?><!--/src/img/favicon/favicon-32x32.png">-->
<!--  <link rel="icon" type="image/png" sizes="16x16" href="--><?php //echo get_template_directory_uri()?><!--/src/img/favicon/favicon-16x16.png">-->
<!--  <link rel="manifest" href="--><?php //echo get_template_directory_uri()?><!--/src/img/favicon/site.webmanifest">-->
<!--  <link rel="mask-icon" href="--><?php //echo get_template_directory_uri()?><!--/src/img/favicon/safari-pinned-tab.svg" color="#5bbad5">-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'finalytics' ); ?></a>

	<header id="masthead" class="site-header <?php if( get_field('hero_color_scheme') == 'light' ): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?>">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-2">
          <div class="site-branding">
            <div class="site-logo">
              <?php if( get_field('hero_color_scheme') == 'light' ): ?>
                <?php $inverse_header_logo = get_theme_mod( 'inverse_header_logo' );
                if ($inverse_header_logo )
                  echo '<a href="/" title="home"><img src="'.$inverse_header_logo.'" alt = "site logo" class="inverse_logo"></a>';
                ?>
              <?php else: ?>
                <?php the_custom_logo(); ?>
              <?php endif; ?>
            </div>
            <?php if ( is_front_page() && is_home() ) :
              ?>
              <p class="site-title"><?php bloginfo( 'name' ); ?></p>
            <?php
            else :
              ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;
            $finalytics_description = get_bloginfo( 'description', 'display' );
            if ( $finalytics_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $finalytics_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
          </div><!-- .site-branding -->
        </div>
        <div class="col-6 col-sm-10">
          <div class="header-navbar">
            <div class="navbar-holder">
              <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                  )
                );
                ?>
              </nav><!-- #site-navigation -->
              <div class="header-sidebar">
                <?php dynamic_sidebar('sidebar-2'); ?>
              </div>
            </div>  <!-- .navbar-holder -->
            <a id="burger" class="main-nav_burger" href="#">
              <img class="header__burger_default" src="<?php bloginfo('template_url') ?>/static/img/nav-icon.svg" alt="menu">
              <img class="header__burger_active" src="<?php bloginfo('template_url') ?>/static/img/cross.svg" alt="menu">
            </a>
          </div><!-- #header-navbar -->
        </div>
      </div>
    </div>
	</header><!-- #masthead -->
