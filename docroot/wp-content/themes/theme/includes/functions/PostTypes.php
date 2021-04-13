<?php

namespace THEME_NAME\BaseTheme;

class PostTypes {

	/**
	 * PostTypes constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}

	/**
	 * Runs on "init" hook
	 */
	public function init() {
		// Remove comments support on posts and pages
		remove_post_type_support( 'post' , 'comments' );
		remove_post_type_support( 'page' , 'comments' );

		// Register "Example" post type
		register_post_type( 'example', [
			'label' => __( 'Examples', 'THEME_NAME-theme' ),
			'labels' => [
				'name' => __( 'Examples', 'THEME_NAME-theme' ),
				'singular_name' => __( 'Example', 'THEME_NAME-theme' ),
				'add_new' => __( 'Add New', 'THEME_NAME-theme' ),
				'add_new_item' => __( 'Add New Example', 'THEME_NAME-theme' ),
				'edit_item' => __( 'Edit Example', 'THEME_NAME-theme' ),
				'new_item' => __( 'New Example', 'THEME_NAME-theme' ),
				'view_item' => __( 'View Example', 'THEME_NAME-theme' ),
				'view_items' => __( 'View Examples', 'THEME_NAME-theme' ),
				'search_items' => __( 'Search Examples', 'THEME_NAME-theme' ),
				'not_found' => __( 'No Examples found', 'THEME_NAME-theme' ),
				'not_found_in_trash' => __( 'No Examples found in trash', 'THEME_NAME-theme' ),
				'all_items' => __( 'All Examples', 'THEME_NAME-theme' ),
				'archives' => __( 'Example Archives', 'THEME_NAME-theme' ),
				'attributes' => __( 'Example Attributes', 'THEME_NAME-theme' ),
				'insert_into_item' => __( 'Insert into Example', 'THEME_NAME-theme' ),
				'uploaded_to_this_item' => __( 'Uploaded to this Example', 'THEME_NAME-theme' ),
				'filter_items_list' => __( 'Filter Examples', 'THEME_NAME-theme' ),
				'items_list_navigation' => __( 'Examples list navigation', 'THEME_NAME-theme' ),
				'items_list' => __( 'Examples list', 'THEME_NAME-theme' ),
				'item_published' => __( 'Example published', 'THEME_NAME-theme' ),
				'item_published_privately' => __( 'Example published privately', 'THEME_NAME-theme' ),
				'item_reverted_to_draft' => __( 'Example reverted to draft', 'THEME_NAME-theme' ),
				'item_scheduled' => __( 'Example scheduled', 'THEME_NAME-theme' ),
				'item_updated' => __( 'Example updated', 'THEME_NAME-theme' ),
			],
			'public' => TRUE,
			'publicly_queryable' => TRUE,
			'show_ui' => TRUE,
			'show_in_menu' => TRUE,
			'show_in_admin_bar' => TRUE,
			'show_in_rest' => TRUE,
			'menu_icon' => 'dashicons-editor-help',
			'supports' => [ 'title', 'content', 'thumbnail', 'revisions' ],
			'taxonomies' => [ 'example_types' ],
		] );
	}

}

new PostTypes();