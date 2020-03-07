<?php get_header(); ?>
<div class="journal-page-grid">


<div class="journal-page-content">        

<?php

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large'); ?>
    <?php echo wp_trim_words(get_the_content(), 20, '[...]') ; ?>
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>


    <div class="sidebar">
<?php get_sidebar();?>
    </div>

</div>
    
<?php get_footer();?>