<?php
/*
Plugin Name: Agathos Technology SAS WP Project
Plugin URI: http://agathos.technology
Description: Main Plugin
Author: Agathos Technology SAS
Version: 1.0
Author URI: http://agathos.technology
Text Domain: agathos.technology
Domain Path: /languages
*/

spl_autoload_register('project_autoloader');

function project_autoloader( $class_name ) {

    $class_components = explode( "_", $class_name );

    if ( isset( $class_components[0] ) && $class_components[0] == "Project" &&
        isset( $class_components[1] )) {

        $class_directory = $class_components[1];

        unset( $class_components[0], $class_components[1] );

        $file_name = implode( "_", $class_components );

        $base_path = plugin_dir_path(__FILE__);

        switch ( $class_directory ) {
            case 'Model':

                $file_path = $base_path . "models/class-project-model-".lcfirst( $file_name ) . '.php';
                if ( file_exists( $file_path ) && is_readable( $file_path ) ) {
                    include $file_path;
                }

                break;
        }
    }
}

if ( ! class_exists('Twig_Autoloader') ){
    $base_path_badges = plugin_dir_path(__FILE__);

    require_once $base_path_badges.'Twig/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();
}

class Agathos_Project_Manager{

    public $base_path;


    function __construct(){
        global $project_options;

        if( !$project_options ){
            //return;
        }

        $this->base_path = plugin_dir_path(__FILE__);
        require_once $this->base_path . 'class-twig-initializer.php';
        $this->template_parser = Twig_Initializer_Agathos_Project::initialize_templates();
        // $this->model_services = new Project_Model_Services( $this->template_parser );
        // $this->model_clients = new Project_Model_Clients( $this->template_parser );
        // $this->model_products = new Project_Model_Products( $this->template_parser );

        add_action( 'cmb2_admin_init', array( $this, 'add_metaboxes' ) );

        add_action( 'init', array( $this,'textdomain' ) );

    }

    // Function get id page from options project
    function get_page_id_from_project_options( $option = false ){

        global $project_options;

        if( $option === false ){
            return false;
        }

        $pageID = $project_options[$option] ? (int)$project_options[$option]: false;

        $currentLanguagePageID = apply_filters( 'wpml_object_id', $pageID, 'page' );
        return $currentLanguagePageID;

    }

    function get_page_about_us_id(){
        return $this->get_page_id_from_project_options('home_about_us_page');
    }

    public function custom_metaboxes(){

        global $project_options;
    }

    public function add_metaboxes(){
        $this->custom_metaboxes();
    }

}
global $agathosProject;

$agathosProject = new Agathos_Project_Manager();

do_action('agathos_project_initialized');
