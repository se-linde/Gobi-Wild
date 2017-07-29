<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php the_content(); ?> 

    <?php endwhile; endif; ?>
        
    <small>single.php</small>   
        
<?php get_footer(); ?>