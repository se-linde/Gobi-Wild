<?php get_header(); ?>

<!-- the content here --> 

    <?php if (have_posts()) : while (have_posts()) : the_post(); // This starts the loop?> 
    	<?php the_title('<h1>', '</h1>'); ?>
        <?php the_content(); ?>
    
    <?php endwhile; endif; // End the loops. ?>

<?php get_footer(); ?> 