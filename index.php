		<?php get_header(); ?> 
		
	</header>
<main>
	<div class="container title-banner">

		<div class="row">
			<div class="col">
				<h1 class="jumbo">Blog</h1>
			</div>			
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php if ( have_posts() ) : while (  have_posts() ) : the_post(); 
					get_template_part( 'template-parts/content', get_post_type() ); ?> 
						<hr>
					<?php endwhile; ?>
			</div>
					<?php get_sidebar(); ?>
					<nav>
						<ul class="pager">
						<li class="pag"><?php previous_posts_link( );?></li>
						<li class="pag"><?php next_posts_link( ); ?></li> 
						
						</ul>
					</nav>
					<?php endif;?>
		</div>	
	</div>
	<?php get_footer(); ?>