<?php
/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/includes/functions/setup.php';

/*add_filter( 'pw-google-maps-api-key', function() {
    return 'AIzaSyC07pWHlL86B89008dX8dJQ0Vc1XqbpQvI';
});*/

add_filter( 'cmb2_render_pw_map', function() {
	wp_deregister_script( 'pw-google-maps-api' );
	wp_register_script( 'pw-google-maps-api', '//maps.googleapis.com/maps/api/js?libraries=places&key=XXXXXXXXXXXXXXXXXXXXXXXXXXX', null, null );
}, 12 );

//Redux::init( 'project_options' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/includes/functions/widgets.php';

/**
* Load functions to secure your WP install.
*/
require get_template_directory() . '/includes/functions/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/includes/functions/loads.php';

/**
 * Custom options theme
 */
require get_template_directory() . '/includes/functions/options_config.php';

/**
 * All Ajax .
 */
// require get_template_directory() . '/includes/functions/ajax/ajax-example.php';

/**
 *  Generate variables JS globals
 */
require get_template_directory() . '/includes/functions/generate_variables_js.php';

/**
 *  Add category and post tag to pages
 */
require get_template_directory() . '/includes/functions/category_page.php';

// DEV
show_admin_bar( false );

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == 'new_testimonial') {
    if (isset ($_POST['title'])) {
        $title =  $_POST['title'];
    } else {
        echo 'Please enter a  title';
    }
    if (isset ($_POST['description'])) {
        $description = $_POST['description'];
    } else {
        echo 'Please enter the content';
    }
    if (isset ($_POST['client'])) {
        $client = $_POST['client'];
    } else {
        echo 'Please enter the client';
    }
    if (isset ($_POST['from'])) {
        $from = $_POST['from'];
    } else {
        echo 'Please enter where you from';
    }

    // Add the content of the form to $post as an array
    $new_post = array(
        'post_title'    => $title,
        'post_content'  => $description,
        // 'testimonials_client' => $client,
        // 'testimonials_from' => $from,
        'post_status'   => 'pending',           // Choose: publish, preview, future, draft, etc.
        'post_type' => 'agathos-testimonials'  //'post',page' or use a custom post type if you want to
    );
    //save the new post
    $pid = wp_insert_post($new_post);

    update_post_meta( $pid, 'testimonials_client', $client );
	update_post_meta( $pid, 'testimonials_from', $from );

    function insert_attachment( $file_handler, $post_id ) {
        if ( $file_handler['error'] )
            return false;

        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
        require_once( ABSPATH . 'wp-admin/includes/media.php' );

        $uploads_dir = wp_upload_dir();
        $file_to_save = wp_handle_upload($file_handler, array('test_form' => false));
        $attachment = array(
            "guid" => $file_to_save['file'], 
            "post_mime_type" => $file_to_save['type'],
            "post_title" => $_POST['thumbnail'],
            "post_content" => "",
            "post_status" => "publish",
            "post_author" => 1
        );
        $attachment_id = wp_insert_attachment( $attachment, $file_to_save['file'], 0);
        $attach_data = wp_generate_attachment_metadata( $attachment_id, $attachment_id['file'] );
	    wp_update_attachment_metadata( $attachment_id, $attach_data );
        // $attachment_id = media_handle_upload( $file_handler, $post_id );

        //set post thumbnail (featured)
        if ( $attachment_id )
            update_post_meta( $post_id, '_thumbnail_id', $attachment_id );
    
        return $attachment_id;
    }

    if ( ! empty( $_FILES['thumbnail'] ) ) {
        $newupload = insert_attachment( $_FILES['thumbnail'], $pid );
    }
}
