<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<div class="home-hero"></div>
<nav class="main-menu">
    <!-- <img src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg"> -->
    <div class="container">
        <div class="logo">
    <img src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-tent-white.svg">
        </div>
   <?php wp_nav_menu(array(
        'theme_location' => 'main'
    )); ?>
    </div>
</nav>

