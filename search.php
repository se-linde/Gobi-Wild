<?php get_header(); ?>

	<h2><?php printf( __('Search Results for: %s', 'gobi'), get_search_query() ); ?></h2>

	<?php if ( have_posts() ) : ?>

		<?php
			while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>">
						<h4><?php the_title(); ?></h4>
				</a>
				<?php the_excerpt(); ?>
		<?php endwhile;

	// Pagination
	the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'gobi' ),
			'next_text'          => __( 'Next page', 'gobi' ),
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gobi' ) . ' </span>',
		) );

	else :
		echo '<h3>No Results Found</h3>';

	endif; ?>

    <small>search.php</small>
        
<?php get_footer(); ?>