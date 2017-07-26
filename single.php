<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); // The loop. ?>
        
        <h2 class="post-title"><?php the_title(); ?></h2>
        <small class="byline">Posted on <?php the_time('F j, Y'); ?></small>
        <div class="blog-text">
            <?php the_post_thumbnail('large'); ?>
            <?php the_content(); ?> 
        </div><!-- .blog-text -->
    <?php endwhile; endif; // ends the loop. ?>
        
        <small>single.php</small>   
    </div>
        
<?php get_footer(); ?>