<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class=" jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
				
					<div class="col">
						<h1 class="jumbo"><?= the_title(); ?></h1>

					</div>
				
				
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-8">
<?=	 the_content(); 
?>
</div>
	<?php get_sidebar(); ?>
		</div>

	</div>
</article>
