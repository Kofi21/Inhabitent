<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?> class="container">
    <header>
    <nav class="<?php echo is_page(array('About', 'Home Page')) ? 'main-menu' : 'main-menu2' ;?>">
            <!-- <a href="http://localhost:8888/red/projects/project-04/"> -->
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo is_page(array('About', 'Home Page')) ?  get_template_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg' : 
         get_template_directory_uri() . '/images/logos/inhabitent-logo-tent.svg' ;?> " >
            </a>
            <?php wp_nav_menu (array(
                'theme_location' => 'main'
            ));?>

            <!--SEARCH GOES HERE -->
            <div class="header-search">
            <?php get_search_form();?>
            </div>
        </nav>
        
      
    </header>
