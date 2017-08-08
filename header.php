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
<link href="https://fonts.googleapis.com/css?family=Averia+Sans+Libre|Barrio|Galindo" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

<!-- JavaScript and JQuery scripts --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    
<!-- The WP head --> 
<?php wp_head(); ?>    
</head>    

<body <?php body_class(); ?>> 
<header>
	<div id="header-top">
		<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/logo.svg" id="logo"></a>
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
    
<!-- begin the content -->     
<main>    