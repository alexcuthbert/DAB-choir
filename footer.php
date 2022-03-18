</main>



      <footer class="container p-0 py-3">
        <?php wp_footer(); ?>

        <?php if ( has_nav_menu( 'primary' ) ) : ?> 
          <nav class="navbar navbar-expand justify-content-center">
          
            

            <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'footer',
                  'menu_class'      => 'menu-wrapper',
                  'container_class' => 'footer-menu-container',
                  'items_wrap'      => '<ul class="navbar-nav mb-2 mb-lg-0">%3$s</ul>',
                  'fallback_cb'     => false,
                )
              );
              ?>            
          </nav>
        <?php endif; ?>
        <div class="d-flex justify-content-center my-5-lg mx-3">
            <p>Derby and Burton Hospitals Choir &#169; 2022 | Site design by <a href="http://alexdavidcuthbert.co.uk">Alex David Cuthbert</a></p>
        </div>

      </footer>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->

        <script src="<?= get_template_directory_uri() . '/scripts/main.js' ?>"></script>
  </body>
</html>