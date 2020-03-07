<?php get_header(); ?>

<div class="shop-header">
    <?php 
    $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ));
     $name = $term->slug;?>
   <div class="product-type-title">
    <h2><?php echo $name;?></h2>
    </div>
    
    <?php echo $description = term_description(); ?>
    
          
</div>
<hr>
<section class="product-page">



<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
<!-- Products -->
    <div class="taxonomy-shop-grid-item">
        <div class="taxonomy-shop-pic">
            <a href="<?php the_permalink();?>">
             <?php the_post_thumbnail(); ?></a></h2>
        </div>
        <div class="taxonomy-product">
            <h2 class="taxonomy-entry-title">
            <?php the_title(); ?></h2>
        <span class="taxonomy-price">
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