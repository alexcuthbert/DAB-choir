	<?php get_header(); ?>

	</header>
	<main>
		
		<?php 
			 
			// Start “The Loop”
			if ( have_posts() ) :	while (  have_posts() ) : the_post(); 
			    	get_template_part( 'template-parts/content', get_post_type() ); 

			    endwhile; 
				endif;
				 get_footer(); ?>
