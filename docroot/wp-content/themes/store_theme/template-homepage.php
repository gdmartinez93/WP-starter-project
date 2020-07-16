<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */ ?>

<?php get_header(); ?>
	<section class="homepage">
		<section class="homepage__slider">
			<?php
				global $project_options;
				$gallery = $project_options['home_slider_gallery'];
				$images = explode(",", $gallery);
			?>

			<div class="swiper-wrapper">
				<?php foreach($images as $image): ?>
					<?php 
            $imageSrc = wp_get_attachment_image_src($image, 'full');
						$imageData = wp_get_attachment_metadata($image);
						$height = $imageData['height'];
						$title = wp_get_attachment($image)['title'];
						$description = wp_get_attachment($image)['description'];
						$caption = wp_get_attachment($image)['caption'];
					?>
					<figure class="swiper-slide" style="height: <?php echo $height; ?>px; background-image: url(<?php echo $imageSrc[0]; ?>)"></figure>
				<?php endforeach; ?>
			</div>

			<div class="swiper-pagination"></div>
		</section>

		<div class="homepage__container">
      <section class="section-home ad-products grid"> <?php
        $adProduct1 = wc_get_product( $project_options['home_product_advertising_1'] );
        $adProduct1_thumbnail = wp_get_attachment_image_src($adProduct1->image_id, 'full')[0];
        $adProduct1_title = $adProduct1->name;
        $adProduct1_description = $adProduct1->short_description;
        $adProduct1_sale_price = $adProduct1->sale_price;
        $adProduct1_regular_price = $adProduct1->regular_price;
        $adProduct1_price = $adProduct1->price;
        $adProduct1_permalink = get_permalink( $adProduct1->id ); ?>
        <article class="ad-product col-6_xs-12">
          <div class="ad-product__container">
            <div class="grid">
              <div class="ad-product__content col-6">
                <h2 class="title"><?php echo $adProduct1_title; ?></h2>
                <p class="description"><?php echo $adProduct1_description; ?></p>

                <?php if ($adProduct1_sale_price !== '') : ?>
                  <p class="regular-price">$<?php echo $adProduct1_regular_price ?></p>
                  <p class="price">$<?php echo $adProduct1_sale_price ?></p>
                <?php else : ?>
                  <p class="price">$<?php echo $adProduct1_price ?></p>
                <?php endif; ?>

                <a href="<?php echo $adProduct1_permalink; ?>" class="button">Comprar</a>
              </div>

              <figure class="ad-product__thumbnail col-6">
                <img src="<?php echo $adProduct1_thumbnail; ?>" alt="<?php echo $adProduct1_title ?>">
              </figure>
            </div>
          </div>
        </article> <?php

        $adProduct2 = wc_get_product( $project_options['home_product_advertising_2'] );
        $adProduct2_thumbnail = wp_get_attachment_image_src($adProduct2->image_id, 'full')[0];
        $adProduct2_title = $adProduct2->name;
        $adProduct2_description = $adProduct2->short_description;
        $adProduct2_sale_price = $adProduct2->sale_price;
        $adProduct2_regular_price = $adProduct2->regular_price;
        $adProduct2_price = $adProduct2->price;
        $adProduct2_permalink = get_permalink( $adProduct2->id ); ?>
        <article class="ad-product col-6_xs-12">
          <div class="ad-product__container">
            <div class="grid">
              <div class="ad-product__content col-6">
                <h2 class="title"><?php echo $adProduct2_title; ?></h2>
                <p class="description"><?php echo $adProduct2_description; ?></p>

                <?php if ($adProduct2_sale_price !== '') : ?>
                  <p class="regular-price">$<?php echo $adProduct2_regular_price ?></p>
                  <p class="price">$<?php echo $adProduct2_sale_price ?></p>
                <?php else : ?>
                  <p class="price">$<?php echo $adProduct2_price ?></p>
                <?php endif; ?>

                <a href="<?php echo $adProduct2_permalink; ?>" class="buy-button button">Comprar</a>
              </div>
              
              <figure class="ad-product__thumbnail col-6">
                <img src="<?php echo $adProduct2_thumbnail; ?>" alt="<?php echo $adProduct2_title ?>">
              </figure>
            </div>
          </div>
        </article>
      </section>

      <section class="section-home on-sale-products">
        <h2>Ofertas</h2>
        
        <div class="container-slider">
          <?php echo do_shortcode('[products limit="20" on_sale="true" class="swiper-wrapper"]'); ?>
        </div>

        <div class="swiper-button-next">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
        </div>
        <div class="swiper-button-prev">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
        </div>
        <div class="swiper-pagination"></div>
      </section>

      <section class="section-home featured-products">
        <h2>Productos Destacados</h2>

        <div class="container-slider">
          <?php echo do_shortcode('[products limit="20" orderby="rating" order="DESC" class="swiper-wrapper"]'); ?>
        </div>

        <div class="swiper-button-next">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
        </div>
        <div class="swiper-button-prev">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
        </div>
        <div class="swiper-pagination"></div>
      </section>

      <section class="section-home grid">
        <div class="new-products col-6_xs-12">
          <h2>Productos nuevos</h2>
          <div class="container-slider">
            <?php echo do_shortcode('[products limit="20" orderby="date" order="DESC" class="swiper-wrapper"]'); ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="best-selling col-6_xs-12">
          <h2>Mas vendidos</h2>
          <div class="container-slider">
            <?php echo do_shortcode('[products limit="20" best_selling="true" class="swiper-wrapper"]'); ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="brands">
        <?php
          $brands = get_terms( array(
            'taxonomy' => 'pwb-brand',
            'hide_empty' => false
          ) );
        
          if ( !empty($brands) ) : ?>
            <div class="container-slider">
              <div class="swiper-wrapper"> <?php
                for ($i = 1; $i <= 10; $i++) {
                  foreach( $brands as $brand ) {
                    $term_value_image = get_term_meta( $brand->term_id, 'pwb_brand_image', true );
                    $image_src = wp_get_attachment_image_src($term_value_image, 'full'); 
                    $image_data = wp_get_attachment_metadata($image_src);
                    $title = wp_get_attachment($term_value_image)['title'];  ?>

                    <figure class="swiper-slide">
                      <a href="index.php/brand/<?php echo $brand->name; ?>">
                        <img src="<?php echo $image_src[0]; ?>" alt="<?php echo $title; ?>">
                      </a>
                    </figure> <?php
                  } 
                }
              ?>
              </div>
            </div>

            <div class="swiper-button-next">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
            </div>
            <div class="swiper-button-prev">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/icons/chevron--white.svg">
            </div> <?php
          endif; 
        ?>
      </section>
		</div>
	</section>
<?php get_footer(); ?>
