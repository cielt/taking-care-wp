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
<!--<body class="nav-closed " data-layout="tc-home">-->
<body <?php if (is_page_template('page-chapter-slideshow.php')) { body_class('nav-closed theme-dark'); } else { body_class('nav-closed'); }  ?> 
  data-layout="<?php if (is_page_template('page-chapter-slideshow.php')) { echo 'tc-slideshow'; } else if (is_page_template('page-chapter.php')) { echo 'tc-chapter'; } else if (is_page_template('front-page.php')) { echo 'tc-home'; }  ?>">
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
          <?php wp_nav_menu( array( 'theme_location' => 'global_menu', 'container' => false, 'menu_id' => 'global-nav', 'menu_class' => 'site-nav-menu' ) ); ?>
        </div>
      </div>
      <div class="scaffold-inner<?php if (is_page_template('page-chapter-slideshow.php')) { echo ' bg-black'; }?>">
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
        <!-- spacing follows -->