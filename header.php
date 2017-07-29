<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
<title><?php get_my_title_tag(); ?></title>
    
    
<meta name="description" content="<?php echo (get_the_excerpt()); ?>" />
<meta name="keywords" content="*add keywords here" />
     
<!-- make this responsive --> 
<meta name="viewport" content="width=device-width, initial-scale=1">    
  
<!-- stylesheets --> 
    
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">


<!-- JavaScript and JQuery scripts --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
    
<!-- The WP head --> 
<?php wp_head(); ?>    
</head>    

<body <?php body_class(); ?>> 
<header>
	<div id="header-top">
		<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/logo.png" id="logo"></a>
		<?php dynamic_sidebar('header-widget'); ?>
	</div> <!-- #header-top -->
	<?php wp_nav_menu(array( 
		'theme_location' => 'main-menu',
		'container' => 'nav',
		'container_id' => 'main-nav',
		'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>'
		)
	); ?>
</header>
<!-- End Header -->    
    
    
<!-- begin navigation - the nav bar -->

<!-- end navigation - the nav bar -->    
    
<!-- begin the content -->     
<main>    