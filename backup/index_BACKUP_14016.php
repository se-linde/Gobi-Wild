<?php get_header(); ?>

<h1><?php single_post_title(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
    
	    <article class="event">
	        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'date', true); ?></a></h2>
	        <h3 class="post-meta"><?php echo get_post_meta($post->ID, 'location', true); ?>, <?php echo get_post_meta($post->ID, 'time', true) ?></h3>
	        
	        <?php if(has_post_thumbnail()) { the_post_thumbnail('blog-list'); } ?>
	        <?php the_excerpt('LEARN MORE'); ?>
	    </article>
    
<<<<<<< HEAD
    <h2><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a></h2>
        <small>Posted on <?php the_time('f j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
=======
<?php endwhile; endif; ?>
>>>>>>> 60a01fafbf6ef62f98a7cdaeef5cb2e81e7e03cc
        
<small>index.php</small> 
    
<?php get_footer(); ?> 