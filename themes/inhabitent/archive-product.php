<?php get_header(); ?>

<div class="shop-header">
    <h2>SHOP STUFF</h2>
            <?php wp_nav_menu (array(
                'theme_location' => 'shop'
            ));?>
          
</div>
<hr>
<section class="product-page">



<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<!-- Products -->
    <div class="shop-grid-item">
        <div class="shop-pic">
            <a href="<?php the_permalink();?>">
             <?php the_post_thumbnail(); ?></a></h2>
        </div>
        <div class="product">
            <h2 class="entry-title">
            <?php the_title(); ?></h2>
        <span class="price">
            <?php echo '$' . get_field('price');?>
        </span>
        </div>
    </div>


  
    <!-- php the_content;  the description  -->
    <!-- Loop ends -->
    <?php endwhile;?>
    <?php the_posts_navigation();?>
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
</section>
<?php get_footer();?>