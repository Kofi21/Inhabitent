<?php get_header(); ?>
<div class="find-us-page-container">
<?php 

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="find-us-content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div>
    
    <!-- Loop ends -->
    <?php endwhile;?>


<?php get_sidebar();?> 

</div>   
<?php get_footer();?>