<?php

class Project_Model_Clients{

    private $post_type_name;
    private $post_type_singular;
    private $post_type_plural;
    private $template_parser;
    private $menu_icon;

    function __construct( $template_parser ) {
        $this->template_parser = $template_parser;
        $this->post_type_name = 'agathos-clients';
        $this->post_type_singular = __('Cliente', 'agathostechnology');
        $this->post_type_plural = __('Clientes', 'agathostechnology');
        $this->menu_icon = 'dashicons-groups';

        add_action( 'init', array( $this, 'create_post_type' ) );
        add_action( 'cmb2_admin_init', array( $this, 'add_meta_boxes' ) );

        add_action( 'wp_enqueue_scripts', array( $this, 'load_frontend_scripts' )  );
        add_action( 'wp_enqueue_scripts', array( $this, 'load_frontend_styles' )  );

        add_action( 'admin_print_styles-post.php', array( $this, 'load_admin_styles' ), 1000 );
        add_action( 'admin_print_styles-post-new.php', array( $this, 'load_admin_styles' ), 1000 );

        add_action( 'admin_print_scripts-post.php', array( $this, 'load_admin_scripts' ), 1000 );
        add_action( 'admin_print_scripts-post-new.php', array( $this, 'load_admin_scripts' ), 1000 );
    }

    function create_post_type(){

        $labels = array(
            'name' => sprintf( _x( '%s', 'post type general name', 'agathostechnology' ), $this->post_type_plural ),
            'singular_name' => sprintf( _x( '%s', 'post type singular name', 'agathostechnology' ), $this->post_type_singular ),
            'add_new' => _x( 'Agregar Nuevo', $this->post_type_singular, 'agathostechnology' ),
            'add_new_item' => sprintf( __( 'Nuevo %s', 'agathostechnology' ), $this->post_type_singular ),
            'edit_item' => sprintf( __( 'Editar %s', 'agathostechnology' ), $this->post_type_singular ),
            'new_item' => sprintf( __( 'Agregar %s', 'agathostechnology' ), $this->post_type_singular ),
            'all_items' => sprintf( __( '%s', 'agathostechnology' ), $this->post_type_plural ),
            'view_item' => sprintf( __( 'Ver %s', 'agathostechnology' ), $this->post_type_singular ),
            'search_items' => sprintf( __( 'Buscar %a', 'agathostechnology' ), $this->post_type_plural ),
            'not_found' => sprintf( __( 'No %s Encontrados', 'agathostechnology' ), $this->post_type_plural ),
            'not_found_in_trash' => sprintf( __( 'No %s Encontrados en la Papelera', 'agathostechnology' ), $this->post_type_plural ),
            'parent_item_colon' => '',
            'menu_name' => $this->post_type_plural,
        );

        $args = array(
            'labels' => $labels,
            'description'         => __( 'Clientes de la compañia', 'agathostechnology'),
            'supports'            => array( 'title', 'editor', 'thumbnail' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'menu_icon'           =>  $this->menu_icon,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );

        register_post_type( $this->post_type_name, $args );
    }

    function add_meta_boxes(){
        
    }

    function load_admin_styles(){

        global $post_type;

        if($this->post_type_name != $post_type){
            return;
        }
    }

    function load_frontend_styles(){

        global $post_type;

        if($this->post_type_name != $post_type){
            return;
        }
    }

    function load_admin_scripts(){

        global $post_type;

        if($this->post_type_name != $post_type){
            return;
        }
    }

    function load_frontend_scripts(){

        global $post_type;

        if($this->post_type_name != $post_type){
            return;
        }
    }
}