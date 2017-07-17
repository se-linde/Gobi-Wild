<?php get_header(); ?>

<!-- Flexslider! --> 

// Insert Flexslider code here later. 

<!-- Widgets! --> 

<div id="widgets"> 
    <section class="widget-item"> 
    
        <h2>About Gobi Wild: </h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(''); // This gets the home page's content ?>
        <?php endwhile; endif; // this ends loop 1. ?> 
        
    </section>
    <section class="widget-item"> 
        <h2>Latest Postings: </h2>
        <ul>
            <?php rewind_posts(); ? // Stops loop 1. >
            <?php query_posts('showposts=4'); // gives directions to loop 2 ?>
            <?php while (have_posts()) : the_post(); // starts loop 2. ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; // end loop 2 ?>
        </ul>
    </section>    
    
    <section class="widget-item"> 
        <h2>Contact Me:</h2>
        <p>Address Info</p>
        
    </section>    
    
    <small>front-page.php</small>
    
    
    
</div>

<?php get_footer(); ?>