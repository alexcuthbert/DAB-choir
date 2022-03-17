<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="author" content="Derby & Burton Hospitals Choir">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() . '/style.css' ?>">

  <?php wp_head(); ?>
</head>

<body>
<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top px-4 py-1 pt-3">
    <div class="container">
      <a href="<?= get_bloginfo('url'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cropped-Choir-Logo-with-Title-1.png" class="navbar-brand logo">
      </a>
      <div class="mob-hide">
        <a class="navbar-brand" href="<?= get_bloginfo('url'); ?>">
          <h1><?= get_bloginfo('name'); ?></h1>
        <p><?= get_bloginfo('description'); ?></p>
        </a>
      </div>

      <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<?php if ( has_nav_menu( 'primary' ) ) : ?> 
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            
              <?php // wp_list_pages( '&title_li=' ); ?>

              <?php
                wp_nav_menu(
                  array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'primary-menu-container',
                    'items_wrap'      => '<ul class="navbar-nav mb-2 mb-lg-0">%3$s</ul>',
                    'fallback_cb'     => false,
                  )
                );
                ?>

            
          </div>
<?php endif; ?>
</div>
</nav>