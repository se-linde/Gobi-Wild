<?php get_header(); ?>

<!-- begin Flexslider --> 

    <div class="flexslider">
        <ul class="slides">
        <li><img src="http://http://www.lindese.com/gobiwild/wordpress/templates/images/img-slide-01.jpg" width="540" height="400" alt="Image One"></li>
        <li><img src="http://http://www.lindese.com/gobiwild/wordpress/templates/images/img-slide-02.jpg" width="540" height="400" alt="Image Two"></li>
        <li><img src="http://http://www.lindese.com/gobiwild/wordpress/templates/images/img-slide-03.jpg" width="540" height="400" alt="Image Three"></li>
        </ul>
    </div>

<!-- end Flexslider --> 

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

<small>front-page.php</small>

<?php get_footer(); ?>