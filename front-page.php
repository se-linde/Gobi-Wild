<?php get_header(); ?>

<section> 
    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    	if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
    	the_content('');
    endwhile; endif; 
    ?>     
</section>    

<small>front-page.php</small>

<?php get_footer(); ?>