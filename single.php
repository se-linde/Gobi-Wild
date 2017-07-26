<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h2 class="post-title"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'date', true); ?></h2>
        <h3 class="post-meta"><?php echo get_post_meta($post->ID, 'location', true); ?>, <?php echo get_post_meta($post->ID, 'time', true) ?></h3>
        <div class="blog-text">
            <?php the_post_thumbnail('large'); ?>
            <?php the_content(); ?> 
        </div><!-- .blog-text -->
    <?php endwhile; endif; ?>
        
        <small>single.php</small>   
        
<?php get_footer(); ?>