<?php get_header(); ?>

<section> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    	if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
    	the_content(''); // This gets the home page's content
    endwhile; endif; // this ends loop 1. ?>     
</section>    

<small>front-page.php</small>

<?php get_footer(); ?>