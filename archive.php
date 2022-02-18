	<?php get_header(); ?>

	</header>
	<main class="page">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<?php 
						 
						// Start “The Loop”
						if ( have_posts() ) :	while (  have_posts() ) : the_post(); 

						    	get_template_part( 'template-parts/content', get_post_type() ); 

						    endwhile; ?>
	</div><?php
						get_sidebar(); ?>
				
					<nav>
						<ul class="pager">
						<li class="pag"><?php previous_posts_link( );?></li>
						<li class="pag"><?php next_posts_link( ); ?></li> 
						
						</ul>
					</nav>
						<?php	endif;
					?>
				
			</div>
		</div>

	<?php get_footer(); ?>