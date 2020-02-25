
<div class="home-hero">
    <!-- <div class="nav-header"> -->

<figure>
<?php get_header(); ?>
     <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
    
    
    <!-- </div> -->
    <div class="main-logo">
    <img src="wp-content/themes/inhabitent/images/logos/inhabitent-logo-full.svg">
    </div>
    </figure>
</div>

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <!-- <figure>
     <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
    
    </figure> -->
    
    <h3><?php the_permalink();?></h3>
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>