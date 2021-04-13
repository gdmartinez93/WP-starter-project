<?php

namespace THEME_NAME\BaseTheme;

class Taxonomies {

	/**
	 * Taxonomies constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}

	public function init() {
		// Unregister default taxonomies
		unregister_taxonomy_for_object_type( 'category', 'post' );
		unregister_taxonomy_for_object_type( 'post_tag', 'post' );

		// Register "Product Types" taxonomy
		register_taxonomy(
			'example_types',
			'examples',
			[
				'labels' => [
					'name' => __( 'Example Types', 'THEME_NAME-theme' ),
					'singular_name' => __( 'Example Type', 'THEME_NAME-theme' ),
					'search_items' => __( 'Search Example Types', 'THEME_NAME-theme' ),
					'all_items' => __( 'All Example Types', 'THEME_NAME-theme' ),
					'parent_item' => __( 'Parent Example Type', 'THEME_NAME-theme' ),
					'parent_item_colon' => __( 'Parent Example Type:', 'THEME_NAME-theme' ),
					'edit_item' => __( 'Edit Example Type', 'THEME_NAME-theme' ),
					'view_item' => __( 'View Example Type', 'THEME_NAME-theme' ),
					'update_item' => __( 'Update Example Type', 'THEME_NAME-theme' ),
					'new_item_name' => __( 'New Example Type', 'THEME_NAME-theme' ),
					'not_found' => __( 'No Example Types found', 'THEME_NAME-theme' ),
					'no_terms' => __( 'No Example Types', 'THEME_NAME-theme' ),
					'items_list_navigation' => __( 'Example Types list navigation', 'THEME_NAME-theme' ),
					'items_list' => __( 'Example Types list', 'THEME_NAME-theme' ),
					'back_to_items' => __( 'Back to Example Types', 'THEME_NAME-theme' ),
				],
				'public' => TRUE,
				'publicly_queryable' => TRUE,
				'hierarchical' => TRUE,
				'show_ui' => TRUE,
				'show_in_nav_menus' => TRUE,
				'show_in_rest' => TRUE,
			]
		);
	}

}

new Taxonomies();

