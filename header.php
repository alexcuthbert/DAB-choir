<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Derby & Burton Hospitals Choir">

	<?php wp_head(); ?>

</head>

<body>
	<header class="container">
		<div class="navbar navbar-expand-sm">
			<div class="col-4 px-0 site-title">

				<!-- MAY WANT TO CHANGE TO LOGO IMAGE-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/cropped-Choir-Logo-with-Title-1.png" class="logo">
				<!--<h1><a href="<?= get_bloginfo('url'); ?>"><?= get_bloginfo('name'); ?></a></h1>-->
				
				<!-- <p><?= get_bloginfo('description'); ?></p> -->
			</div>
			<div class="col-8 content-right">
				<nav class="navbar-expand-sm blog-nav">
					<ul>
						<?php wp_list_pages( '&title_li=' ); ?>
					</ul>
				</nav>
			</div>
		</div>