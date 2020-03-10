<?php get_header(); ?>
<div class="single-journal-page-grid">


<div class="single-journal-page-content">        

<?php

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large'); ?>

<p><?php echo get_the_content();?></p>
<div class="category-tags">
<p>POSTED IN <i class="fas fa-long-arrow-alt-right"></i> <?php echo the_category(', '); ?></p>
<p>TAGGED <i class="fas fa-long-arrow-alt-right"></i> <?php echo the_tags(''); ?></p>

</div>
<div class="shop-icons">
    <i class="fab fa-facebook-f"> &nbsp; Like</i>
    <i class="fab fa-twitter"> &nbsp; Tweet</i>
    <i class="fab fa-pinterest"> &nbsp; Pin</i>
    </div>



    <!-- Loop ends -->
    <?php endwhile;?>
    </div>


    <div class="sidebar">
<?php get_sidebar();?>
    </div>

</div>
    
<?php get_footer();?>