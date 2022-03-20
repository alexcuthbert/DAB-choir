

<article <?php //post_class(); ?> class="pt-4 pb-3 mb-3" id="post-<?php the_ID(); ?>">
<?php 
get_template_part( 'template-parts/featured-image')
	?>
<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author('first name'); ?></a></p>
<?=	 the_excerpt(); ?>

	</article>