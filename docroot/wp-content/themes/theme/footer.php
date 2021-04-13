<?php
      global $project_options;
      $logo = $project_options['general_settings_logo'];
      $logo = file_get_contents( wp_get_attachment_url( $logo['id'] ) ); ?>

      </main>
    </div>

    <footer class="o-footer">
      <div class="container">
        <div class="grid">
          <div class="o-footer__logo col-3_xs-12_md-4"><?php
            echo $logo; ?>
          </div>
        </div>
      </div>
    </footer><?php 
    
    wp_footer(); ?>
  </body>
</html>
