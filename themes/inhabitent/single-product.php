<?php get_header(); ?>


<?php

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="single-products">
    
    <?php the_post_thumbnail(); ?>

    <div class="products-info">
    <h2><?php the_title(); ?></h2>
    <span class="price">
        <?php echo '$' . get_field('price');?>
    </span>
    <?php the_content(); ?>
    <div class="shop-icons">
    <i class="fab fa-facebook-f"> &nbsp; Like</i>
    <i class="fab fa-twitter"> &nbsp; Tweet</i>
    <i class="fab fa-pinterest"> &nbsp; Pin</i>
    </div>

    </div>

    
    <!-- Loop ends -->
    <?php endwhile;?>
    </div>



<?php get_footer();?>