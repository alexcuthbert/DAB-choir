	<?php get_header(); ?>

	</header>
	<main class="page">
		
		<?php 
			 
			// Start “The Loop”
			if ( have_posts() ) :	while (  have_posts() ) : the_post(); 

			    	get_template_part( 'template-parts/content-single', get_post_type() ); 

			    endwhile; 

			endif;
		?>
				
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
