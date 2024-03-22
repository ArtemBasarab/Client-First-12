<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
       <div class="header__container container">
           <div class="header__top-bar">
               <?php
               the_custom_logo();
               wp_nav_menu(
                   array(
                       'theme_location' => 'header',
                       'menu_id'        => 'header',
                       'container'      => '',
                       'menu_class'     => 'header__menu'
                   )
               );
               ?>
               <button class="header__subscribe-btn" type="button">Subscribe</button>
               <div class="header__burger-btn">
                   <div class="header__burger-btn-line"></div>
                   <div class="header__burger-btn-line"></div>
                   <div class="header__burger-btn-line"></div>
               </div>
           </div>
       </div>
    </header><!-- #masthead -->
