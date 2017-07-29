<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); // This starts the loop?> 
    	<?php the_title('<h1>', '</h1>'); ?>
        <?php the_content(); ?>
    
    <?php endwhile; endif; // End the loops. ?>

    <h2>Force of Nature - July 10th 2017</h2>

	<div id="flexbox">
		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

	</div><!-- #flexbox -->
        
    <h2>One with the Forest - June 26th 2017</h2>

    	<div id="flexbox">
		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

		<div class="flex-element">
		</div> <!-- .flex-element -->

	</div><!-- #flexbox -->

    <small>pagegallery.php</small> 
    

<?php get_footer(); ?> 