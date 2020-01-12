<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<?php wp_head(); ?>
</head>

<?php
	global $project_options, $post;
	$phone = $project_options['general_settings_contact_phone'];
	$email = $project_options['general_settings_contact_mail'];
	$address = $project_options['general_settings_contact_address'];
	$facebook = $project_options['general_settings_social_facebook'];
	$instagram = $project_options['general_settings_social_instagram'];
?>

<body <?php body_class(); ?>>
  <div id="wptime-plugin-preloader"></div>

  <?php do_action( 'storefront_before_site' ); ?>

  <div id="page" class="hfeed site nutripower">
    <?php do_action( 'storefront_before_header' ); ?>

    <header class="header" role="banner" style="<?php storefront_header_styles(); ?>">
      <div class="container">
        <div class="header__top-bar grid-middle hidden-xs">
          <div class="col-6_xs-12-center">
            <p class="contact">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/phone.svg">
              <?php echo $phone; ?>
            </p>

            <p class="email">email: <?php echo $email; ?></p>
          </div>

          <div class="social-media col-6-right_xs-12-center">
            <a href="<?php echo $facebook; ?>">
              <svg id="top-bar-facebok" data-name="Top bar facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.97 18.66">
                <defs>
                  <style>.cls-1{fill:#232323;}</style>
                </defs>
                <title>Icono</title>
                <path class="cls-1" d="M9.41.17H7.12C4.54.16,2.87,1.94,2.87,4.69V6.78H.56a.37.37,0,0,0-.36.38v3a.37.37,0,0,0,.36.37H2.87V18.2a.37.37,0,0,0,.36.38h3a.37.37,0,0,0,.36-.38V10.56H9.3a.37.37,0,0,0,.36-.37v-3a.39.39,0,0,0-.11-.27.36.36,0,0,0-.26-.11H6.6V5c0-.85.2-1.28,1.27-1.28H9.41a.37.37,0,0,0,.36-.38V.54A.36.36,0,0,0,9.41.17Z"/>
              </svg>
            </a>

            <a href="<?php echo $instagram; ?>">
              <svg version="1.1" id="top-bar-instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;" xml:space="preserve">
                <g>
                  <path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
                    V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
                    h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
                    c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
                    c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
                    H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
                    c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
                </g>
              </svg>
            </a>
          </div>
        </div>

        <div class="header__container grid-middle">
          <button class="header__container__button-toggle button--clear col-shrink hidden-md-lg" type="button">
            <div class="hamburger hamburger--spring">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </button>

          <div class="header__container__brand col-shirnk hidden-md-lg">
            <figure class="logo">
              <a href="<?php echo home_url(); ?>" rel="home">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo-symbol.svg">
              </a>
            </figure>
          </div>

          <div class="header__container__search site-search col-4 hidden-xs"></div>

          <div class="header__container__brand col-4-center hidden-xs">
            <figure class="logo">
              <a href="<?php echo home_url(); ?>" rel="home">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.svg">
              </a>
            </figure>
          </div>

          <div class="header__container__actions col-4">
            <button class="account-action hidden-xs button--clear" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg id="account-icon" data-name="Account 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.97 27.33">
                <title>Icono</title>
                <path class="cls-1" d="M11,14.54c4,0,5.47-4,5.85-7.33C17.31,3.14,15.39.07,11,.07S4.69,3.14,5.16,7.21C5.54,10.52,7,14.54,11,14.54Z"/><path class="cls-1" d="M21.88,24.13a28.91,28.91,0,0,0-.42-3.84c-.27-1.53-.62-3.77-1.95-4.77a11.51,11.51,0,0,0-2.66-1.11,11.88,11.88,0,0,1-1.18-.53,6.11,6.11,0,0,1-4.67,2,6.14,6.14,0,0,1-4.67-2,11.67,11.67,0,0,1-1.17.53A11.16,11.16,0,0,0,2.5,15.52c-1.34,1-1.68,3.24-1.95,4.77a25.92,25.92,0,0,0-.42,3.84c0,1,.46,1.13,1.29,1.43a24.79,24.79,0,0,0,3.2.88,32.57,32.57,0,0,0,6.38.8,32.67,32.67,0,0,0,6.39-.8,25.24,25.24,0,0,0,3.2-.88C21.42,25.26,21.91,25.12,21.88,24.13Z"/>
              </svg>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Mi cuenta</a>
              <a class="dropdown-item" href="#">Mensajes</a>
              <a class="dropdown-item" href="#">Desconectarse</a>
            </div>
          </div>
        </div>

        <div class="header__navigation hidden-xs">
          <nav class="menu-navigation">
            <?php wp_nav_menu( array( 
                'menu' => 'primary-menu',
                'menu_class' => 'menu-navigation__container grid-spaceBetween'
            ) ) ?>            

            <section class="menu-navigation__menu grid-noGutter">
                <?php 
                $product_categories_level_1 = array(
                    'taxonomy'     => 'product_cat',
                    'orderby'  => 'field',
                    'order'    => 'ASC',
                    'hierarchical' => 1,
                    'parent'   => 0,
                    'hide_empty'   => 0
                );
                $all_categories_level_1 = get_categories( $product_categories_level_1 );
                ?>

                <aside class="menu-navigation__menu__sidebar col-3">
                <ul>
                    <?php foreach ($all_categories_level_1 as $cat) {
                    echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';
                    } ?> 
                </ul>
                </aside>

                <div class="menu-navigation__menu__content col-9">
                <?php foreach ($all_categories_level_1 as $cat) {
                    echo '<div class="content-container grid">';
                    if ($cat->category_parent == 0) {
                        $category_id = $cat->term_id;
                        $product_categories_level_2 = array(
                        'taxonomy'     => 'product_cat',
                        'orderby'      => 'name',
                        'child_of'     => 0,
                        'parent'       => $category_id,
                        'show_count'   => 0,
                        'pad_counts'   => 0,
                        'hierarchical' => 1,
                        'title_li'     => '',
                        'hide_empty'   => 0
                        );

                        $sub_cats = get_categories( $product_categories_level_2 );
                        echo '<div class="col-6 subcategories">';
                        if ($sub_cats) {
                            echo '<h3>'. $cat->name .'</h3>';
                            echo '<ul>';
                            foreach ($sub_cats as $sub_category) {
                            echo '<li><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name .'</a></li>';
                            }
                            echo '</ul>';
                        }
                        echo '</div>';

                        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        if ($image) {
                        echo '<div class="col-6 thumbnail"><figure class="thumbnail__container grid-middle-center-noGutter">';
                            echo '<img src="'. $image .'" alt="'. $cat->name .'" />';
                        echo '</figure></div>';
                        }
                    } else {
                        echo '<p>No tiene subcategorias</p>';
                    }
                    echo '</div>';
                } ?> 
                </div>
            </section>
          </nav>
        </div>

        <?php
          /**
           * Functions hooked into storefront_header action
           *
           * @hooked storefront_header_container                 - 0
           * @hooked storefront_skip_links                       - 5
           * @hooked storefront_social_icons                     - 10
           * @hooked storefront_site_branding                    - 20
           * @hooked storefront_secondary_navigation             - 30
           * @hooked storefront_product_search                   - 40
           * @hooked storefront_header_container_close           - 41
           * @hooked storefront_primary_navigation_wrapper       - 42
           * @hooked storefront_primary_navigation               - 50
           * @hooked storefront_header_cart                      - 60
           * @hooked storefront_primary_navigation_wrapper_close - 68
           */
          do_action( 'storefront_header' );
        ?>
      </div>
    </header>

    <div id="wrapper" class="site-content" tabindex="-1">
      <?php do_action( 'storefront_before_content' ); ?>

      <nav class="header__navigation--mobile">
        <ul>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'cuenta' ) ) ?>">
              Mi cuenta
            </a>
          </li>

          <li class="is-categories">
            <a href="#">
              Categorias
            </a>

            <ul>
              <?php foreach ($all_categories_level_1 as $category) {
                echo '<li><a href="'. get_term_link($category->slug, 'product_cat') .'">'. $category->name .'</a>';

                if ($category->category_parent == 0) {
                  $category_id_level_2 = $category->term_id;
                  $product_categories_level_2 = array(
                    'taxonomy'     => 'product_cat',
                    'orderby'      => 'name',
                    'child_of'     => 0,
                    'parent'       => $category_id_level_2,
                    'show_count'   => 0,
                    'pad_counts'   => 0,
                    'hierarchical' => 1,
                    'title_li'     => '',
                    'hide_empty'   => 0
                  );

                  $cats_level_2 = get_categories( $product_categories_level_2 );
                  if ($cats_level_2) {
                    echo '<ul>';

                    foreach ($cats_level_2 as $category_level_2) {
                      echo '<li><a href="'. get_term_link($category_level_2->slug, 'product_cat') .'">'. $category_level_2->name .'</a></li>';
                    }

                    echo '</ul>';
                  }
                }

                echo '</li>';
              } ?>
            </ul>
          </li>

          <li>
            <a href="<?php echo get_permalink( get_page_by_path( 'ayuda' ) ) ?>">
              Ayuda y PQR
            </a>
          </li>
        </ul>
      </nav>

      <main id="main-nutripower" role="main" class="<?php if (is_front_page()) { echo 'is-home'; } ?>">
        <?php do_action( 'storefront_content_top' );
