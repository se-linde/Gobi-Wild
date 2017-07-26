<?php get_header(); ?>

<!-- the content here --> 

    <?php if (have_posts()) : while (have_posts()) : the_post(); // This starts the loop?> 
    
    <article>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small class="byline">Posted on <?php the_time('F j, Y'); ?></small>
        
        <div class="blog-text">
        <?php the_excerpt(); ?>
    </article>
    
        <?php endwhile; endif; // End the loops. ?>
        
        <small>index.php</small> 
    

<?php get_footer(); ?> 