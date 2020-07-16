<?php global $post;  ?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
  <head>
    <?php $site_name = get_bloginfo( 'name' ); ?>
    <title><?php echo $site_name; ?></title>
    <meta name="description" content="We are a digitally company with innovation, design, and engineering everything in one place. We are in the latest trends in technology in the digital field to empower your company in every aspect or why not start to do the shape of your ideas.">
    <meta name=”robots” content="index, follow">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <script>
      var pathTheme = '<?php echo get_stylesheet_directory_uri() ?>';
    </script>
    <?php wp_head(); ?>
  </head>

  <body>
    <!--<div id="wptime-plugin-preloader"></div>--> <?php
    
    global $project_options;
    $logo = $project_options['general_settings_logo'];
    $logo = file_get_contents(wp_get_attachment_url($logo['id'])); ?>

    <header id="header" class="o-header">
      <figure class="o-header__brand">
        <a href="<?php echo home_url(); ?>"><?php echo $logo; ?></a>
      </figure>
    </header>
    
    <main id="main" role="main">
