<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	
			<div class="container title-banner">
				<div class="row">
				
					<div class="col">
						<h1 class="jumbo"><?= the_title(); ?></h1>

					</div>
				
				
				</div>
			</div>
	
		<div class="container">
			
<?=	 the_content(); 
?>
</div>
	<?php //get_sidebar(); ?>

</article>
