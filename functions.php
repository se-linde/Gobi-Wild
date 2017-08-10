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
add_image_size('blog-list', 350, 250, true);

// page excerpts
add_post_type_support( 'page', 'excerpt' );

//Replaces the excerpt "Read More" text
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">....LEARN MORE</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Constrains excerpt length
function custom_excerpt_length ($length) {
	return 125;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// SEO Title Tag
function get_my_title_tag() {
    global $post;
    
    if ( is_front_page()) {
		bloginfo('description');
	} elseif ( is_page() || is_single()) { // pages and postings
		the_title();	
	} else {	
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