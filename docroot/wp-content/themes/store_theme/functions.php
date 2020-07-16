<?php
/**
 * Theme setup and custom theme supports.
 */
require get_theme_file_path() . '/includes/functions/setup.php';

/*
* Enable support to upload svg files
*/
function support_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'support_svg');

/*add_filter( 'pw-google-maps-api-key', function() {
    return 'AIzaSyC07pWHlL86B89008dX8dJQ0Vc1XqbpQvI';
});*/
	
// add_filter( 'cmb2_render_pw_map', function() {
// 	wp_deregister_script( 'pw-google-maps-api' );
// 	wp_register_script( 'pw-google-maps-api', '//maps.googleapis.com/maps/api/js?libraries=places&key=XXXXXXXXXXXXXXXXXXXXXXXXXXX', null, null );
// }, 12 );

// Redux::init( 'project_options' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_theme_file_path() . '/includes/functions/widgets.php';

/**
* Load functions to secure your WP install.
*/
require get_theme_file_path() . '/includes/functions/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_theme_file_path() . '/includes/functions/loads.php';

/**
 * Custom options theme
 */
require get_theme_file_path() . '/includes/functions/options_config.php';

/**
 * All Ajax .
 */
// require get_theme_file_path() . '/includes/functions/ajax/ajax-example.php';

/**
 *  Generate variables JS globals
 */
require get_theme_file_path() . '/includes/functions/generate_variables_js.php';

/**
 *  Add category and post tag to pages
 */
require get_theme_file_path() . '/includes/functions/category_page.php';

// DEV
// show_admin_bar( false );

function wp_get_attachment( $attachment_id ) {
    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

add_filter('loop_shop_per_page', 'products_per_page', 20);
function products_per_page($products) {
    $products = 15;
    return $products;
}

add_filter('woocommerce_get_price_html', 'store_theme_percent_of_on_sale', 10, 2);
function store_theme_percent_of_on_sale($price, $product) {
    if ($product->sale_price) {
        $percent = round( (($product->regular_price - $product->sale_price) / $product->regular_price) * 100 );
        return $price . sprintf( __('<p class="discount">Ahorra <span>%s&#37</span></p>', 'woocommerce'), $percent );
    }

    $dateRequiredToNewProduct = strtotime('now') - strtotime('-10 days');
    if ($product->date_created >= $dateRequiredToNewProduct) {
        return sprintf( __('<span class="newst">Nuevo</span>', 'woocommerce'), $dateRequiredToNewProduct);
    }

    // return sprintf( __('<span class="newest">Testing</span>', 'woocommerce'), $dateRequiredToNewProduct);

    return $price;
}

add_filter('woocommerce_product_tabs', 'store_theme_removetabs_product', 11, 1);
function store_theme_removetabs_product($tabs) {
    unset($tabs['pwb_tab']);
    return $tabs;
}

if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'homepage-header--desktop', 500, 740, true );
    // add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
}

define( 'WP_AUTO_UPDATE_CORE', false );

