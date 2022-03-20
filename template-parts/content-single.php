<!-- 
PAGE CONTENT LAYOUT:

Title & featured image

Text / content
	paragraphs
	buttons

Sidebar / aside (3/12 max)
	News / Updates
	Members
	Contact / Join the Choir
	FAQ

Footer
-->
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="container title-banner">
		<div class="row">
			<div class="col">
				<h1 class="jumbo"><?= the_title(); ?></h1>
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author('first name'); ?></a></p>
				<?=	 the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
	</article>