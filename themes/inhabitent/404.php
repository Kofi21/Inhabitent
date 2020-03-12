<?php get_header(); ?>
<div class="error-page-container">
    <div class="error-page-content">
<h1>OOPS! THAT PAGE CAN'T BE FOUND.</h1>
<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>

<div>
<h2>Recent Posts</h2>
<ul>
<?php
    $recent_posts = wp_get_recent_posts();
    foreach( $recent_posts as $recent ) {
        printf( '<li><a href="%1$s">%2$s</a></li>',
            esc_url( get_permalink( $recent['ID'] ) ),
            apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
        );
    }
?>
</ul>
</div>

<div>
    <h2>Most used categories</h2>
    <ul>
    <?php wp_list_categories( array(
    'orderby'              => 'name',
    'show_count'           => true,
    'title_li' => ''
    ));?>
    </ul>
</div>
<div class="error-page-archives">
    <h2>Archives</h2>
    
        <select class="drop-down">
            <option value="select-month">Select Month</option>
          <option value="april">April</option>
          <option value="march">March</option>
        </select>
      
</div>


</div>
<?php get_sidebar();?> 
</div>
<?php get_footer();?>