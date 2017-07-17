// Index.php file for testing, to make sure
// git sync works from our servers.

// master git repo: https://github.com/se-linde/Gobi-Wild/

//test edit (mel)

// Another test edit! (Dwayne)!

//meow


// This is a try at a commit! Dwayne. meow.

// And now, the real index.php. 

<?php get_header(); ?>

<!-- the content here --> 

<div id="content"> 
    <?php if (have_posts()) : while (have_posts()) : the_post(); // This starts the loop?> 
    
    <article id="post-<?php the_ID(); ?>" class="post-excerpt">
    
    <h2><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?></a></h2>
        <small>Posted on <?php the_time('f j, Y'); ?> by <?php the_author() in <?php the_category(', '); ?></small>
        
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?></a>    
        
        <?php the_excerpt(); ?>
    </article>
    
        <?php endwhile; endif; // End the loops. ?>
        
        <small>index.php</small> 
    
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?> 

