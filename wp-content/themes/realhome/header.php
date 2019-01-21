<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ;?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<div class="menu-container">
    <div>
        <img class="logo-header" src="<?php echo bloginfo('template_url');?>/images/logo-1.png"" alt="logo">
    </div>
    <div class="real-menu"><?php  wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => 'nav')); ?></div>
    <div class="real-menu-second">	<?php  wp_nav_menu(array( 'theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
    </div>
</div>
</header>

