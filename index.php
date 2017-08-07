<?php get_header(); ?>

<h1><?php single_post_title(); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
    
	    <article class="event">
	        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'date', true); ?></a></h2>
	        <h3 class="post-meta"><?php echo get_post_meta($post->ID, 'location', true); ?>, <?php echo get_post_meta($post->ID, 'time', true) ?></h3>
	        
	        <?php if(has_post_thumbnail()) { the_post_thumbnail('blog-list'); } ?>
	        <?php the_excerpt('LEARN MORE'); ?>
	    </article>
    

<?php endwhile; endif; ?>
  
<?php get_footer(); ?>