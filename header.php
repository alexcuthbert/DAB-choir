<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Derby & Burton Hospitals Choir">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	
</head>
<body>

<header class="">
	
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white p-4">
  <div class="container">


  <div class="d-inline-flex justify-content-start align-items-center">
    <a href="<?= get_bloginfo('url'); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/cropped-Choir-Logo-with-Title-1.png" class="navbar-brand logo">
    </a>
    <div class="mob-hide">
      <a href="<?= get_bloginfo('url'); ?>" class="brand">
        <h1><?= get_bloginfo('name'); ?></h1>
      </a>
      <p><?= get_bloginfo('description'); ?></p>
    </div>
  </div>

  <div class="d-inline-flex justify-content-end">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <?php wp_list_pages( '&title_li=' ); ?>
    </ul>
  </div>


</div>
</nav>


