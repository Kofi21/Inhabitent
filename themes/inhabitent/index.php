<?php get_header(); ?>
<div class="journal-page-grid">


<div class="journal-page-content">        

<?php

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large'); ?>

<p><?php echo wp_trim_words(get_the_content(), 60, '[...]') ; ?></p>
<?php echo category_description(); ?>
<button>
<a href="<?php echo get_permalink();?>">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
</button>




    <!-- Loop ends -->
    <?php endwhile;?>
    </div>

    <div class="sidebar">
<?php get_sidebar();?>
    </div>

</div>
    
<?php get_footer();?>