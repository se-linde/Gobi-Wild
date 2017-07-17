<?php get_header(); ?>

    <!-- begin the text --> 

    <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); // The loop. ?>
        
        <h2><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?></a></h2>    

        <small>Posted in <?php the_category(', '); ?></small>
        <?php the_post_thumbnail('large'); ?>
        <?php the_content(''); ?> 
        <?php endwhile; endif; // ends the loop. ?>
        
        <small>single.php</small>   
    </div>
        

<?php get_sidebar(); ?>
<?php get_footer(); ?>