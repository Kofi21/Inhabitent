


    <div class="about"
    style="background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.4) 0%,
      rgba(0, 0, 0, 0.4) 100%
    ), url(<?php echo get_the_post_thumbnail_url();?>); 
    width:100%; 
    height:100vh"> 
    <?php get_header(); ?>
    <h2><?php the_title(); ?></h2>
    </div>

    <?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <!-- <?php the_post_thumbnail(); ?>
    <h3><?php the_permalink();?></h3> -->
    <?php the_content(); ?>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>