<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>
    
    
<meta name="description" content="<?php echo (get_the_excerpt()); ?>" />
<meta name="keywords" content="*add keywords here" />
     
<!-- make this responsive --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />    
    
  
<!-- stylesheets --> 
    
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">


<!-- JavaScript and JQuery scripts --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>

<!--  Rest of the header to be written below! --> 
    
<!-- The WP head --> 
<?php wp_head(); ?>    
</head>    

<div id="header">
<h1 id="logo"><a href="http://www.lindese.com/gobiwild/wordpress/">Gobi Wild</a></h1>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->    
    
    
<!-- begin navigation - the nav bar -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!-- end navigation - the nav bar -->    
    
<!-- begin the content -->     
<div id="content">    