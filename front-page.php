<?php get_header(); ?>



    <?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    	
	    	if ( has_post_thumbnail() ) {
	    		echo '<div id="spotlight">';
				the_post_thumbnail();
				echo '<p id="banner">' . get_post_meta($post->ID, 'banner', true) . '</p>';
				echo '</div><!-- #spotlight -->';
			} 
		
    	the_content('');
    endwhile; endif; 
    ?>     


<!-- begin Flexslider --> 

<div class="flexslider">
    <ul class="slides">
        <li><img src="<?php bloginfo('template_directory'); ?>/images/test1.jpg" width="940" height="400" alt="Image One"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/test2.jpg" width="940" height="400" alt="Image Two"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/test3.jpg" width="940" height="400" alt="Image Three"></li>
    </ul>
</div>

<!-- end Flexslider --> 


<small>front-page.php</small>

<?php get_footer(); ?>