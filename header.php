<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Taking_Care
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body class="tc-home nav-closed <?php body_class(); ?>" data-layout="tc-home">
  <div id="page" class="page">
  	<a class="skip-link screen-reader-text vis-hidden" href="#content"><?php esc_html_e( 'Skip to content', 'taking-care' ); ?></a>
    <div class="scaffold-outer p-rel">
      <!-- Nav Drawer -->
      <div class="site-nav-block pa-4">
        <div class="site-nav-wrapper">
          <h3 id="site-menu" class="menu tf-sans ts-s mb-5 upper c-blueGrey0 bold">Menu</h3>
          <a href="#" id="close-menu-btn" class="close-menu">
            <b class="fa fa-times" aria-hidden="true"></b><span class="vis-hidden">Close Menu</span>
          </a>
          <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'container' => false, 'menu_id' => 'global-nav', 'menu_class' => 'site-nav-menu' ) ); ?>
          <!-- <ul class="site-nav-menu">
            <li class="site-nav-item nav-home" role="presentation"><a href="index.html" class="site-nav-link link-home">Home</a></li>
            <li class="site-nav-item nav-early-years" role="presentation"><a href="chapter-1-early-years.html" class="site-nav-link link-early-year">Early Years</a></li>
          </ul> -->
        </div>
      </div>
      <div class="scaffold-inner">
        <div class="menu-overlay"></div>
        <!-- global header -->
        <div class="header-bar">
          <div class="header-bar-context p-rel">
            <div class="overlay"></div>
            <div class="content px-3 pt-2 pb-2 p-rel z2 cf">
              <a class="logo home-link fl" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <span class="ico ico-swallow dib mr-1 va-m lh-reset"></span><em class="home-label"><?php bloginfo( 'name' ); ?></em>
              </a>
              <div class="header-bar-block fr">
                <a href="#" id="global-menu-btn" class="menu-btn"><b class="fa fa-bars dib mr-1" aria-hidden="true"></b> Menu</a>
              </div>
            </div>
          </div>
        </div>
        <div class="main p-rel z2">
          <div class="header-spacing"></div>