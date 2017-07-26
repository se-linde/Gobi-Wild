<?php get_header(); ?>

<!-- the content here --> 

    <?php if (have_posts()) : while (have_posts()) : the_post(); // This starts the loop?> 
    
        <?php the_content(); ?>
    
    <?php endwhile; endif; // End the loops. ?>
        
    <small>page.php</small> 
    

<?php get_footer(); ?> 