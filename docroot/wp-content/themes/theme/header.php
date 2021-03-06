<?php global $post; ?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <?php $site_name = get_bloginfo( 'name' ); ?>
    <title><?php echo $site_name; ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name=”robots” content="index, follow">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <script>
      var pathTheme = '<?php echo get_stylesheet_directory_uri() ?>';
    </script><?php 
    
    wp_head(); ?>
  </head>

  <body>
    <div id="wptime-plugin-preloader"></div><?php

    global $project_options;
    $logo = $project_options['general_settings_logo'];
    $logo = file_get_contents( wp_get_attachment_url( $logo['id'] ) ); ?>

    <header class="o-header">
      <div class="container">
        <div class="grid-middle">
          <div class="o-header__logo col-shrink">
            <a href="<?php echo home_url(); ?>"><?php echo $logo; ?></a>
          </div>
          
          <div class="o-header__menu-action">
            <button class="button-collapse" type="button">
              <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
              </div>
            </button>
          </div>
        </div>
      </div>
    </header>
        
    <div id="wrapper">
      <main id="main" role="main">
