<?php get_header(); ?>



    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    	
	    	if ( has_post_thumbnail() ) {
	    		echo '<div id="spotlight">';
				the_post_thumbnail();
                echo '<div class="banner">';
				echo '<a href="';
                echo bloginfo('url');
                echo '/events">' . get_post_meta($post->ID, 'banner', true) . '</a>';                
                echo '</div><!-- .banner -->';
				echo '</div><!-- #spotlight -->';
			} 
		
    	the_content('');
    endwhile; endif; 
    ?>     


<?php get_footer(); ?>