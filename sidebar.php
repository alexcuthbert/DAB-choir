<div class="col-sm-4  blog-sidebar side">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Have a Question?</h4>
    <p>
      Place contact prompt here.
    </p>
    <a href="<?php //insert WP QUERY HERE ?>" class="btn btn-outline-primary">Just Ask</a>
  </div>

  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <?php wp_get_archives('type=monthly'); ?>
      <!-- More archive examples -->
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Find us Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">YouTube</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</div>
<!-- /.blog-sidebar -->