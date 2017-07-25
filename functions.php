<?php

/*
Theme Name: Gobi Wild
Author: Seattle Central WEB210/ITC210 Class Summer 2017
Author URI:
Description: Responsive theme for Gobi Wild Nature Parks
Version: 1.0
*/



//Register my sidebar
function gobi_widgets_init() {
	register_sidebar(array(
		'name'          => __( 'Header', 'gobi-wild' ),
		'id'            => 'header-widget',
		'description' 	=> __( 'Widgets in this area will be shown in the upper-right header area', 'gobi-wild' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
}

add_action( 'widgets_init', 'gobi_widgets_init' );

//Register Nav Menus
register_nav_menus(array(
    'main-menu' => __('Main Menu'),
    'footer-menu' => __('Footer Menu')
));

//featured images and post thumnails
add_theme_support( 'post-thumbnails' );
//
// page excerpts
add_post_type_support( 'page', 'excerpt' );


// SEO Title Tag
function get_my_title_tag() {
    global $post;
    
    	if ( is_front_page()) {
		bloginfo('description');
	}
	
	elseif ( is_page() || is_single()) { // pages and postings
		the_title();	
	}
		
	//elseif ( is_404() || is_search())  { // pages and postings
		//echo 'Sorry this page has no content!';	
	//}	
	
	
	else {
		
		bloginfo('description');
	}
		
		if ($post->post_parent ) {
			echo ' | ';
			echo get_the_title($post->post_parent);
	}
    
    
    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Bend, OR.';
}





// Thi adds the flexslider. 
function add_flexslider() { // display images as a flexslider 
     
    global $post;
    
    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));
    
    if ($attachments) { 
        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
	foreach ( $attachments as $attachment_id => $attachment ) { 
	
		echo '<li>';
		echo wp_get_attachment_image($attachment_id, 'large');
		echo '<p>';
		echo get_post_field('post_excerpt', $attachment->ID);
		echo '</p>';
		echo '</li>';     
	}
	echo '</ul>';
	echo '</div>';
        
    } 
    
} 

?>