<?php

namespace THEME_NAME\BaseTheme;

class Acf {

	/**
	 * Acf constructor.
	 */
	public function __construct() {
		add_action( 'acf/init', [ $this, 'register_blocks' ] );
		add_filter( 'render_block', [ $this, 'render_block' ], 10, 2 );
	}

	/**
	 * Render ACF blocks that don't have any fields.
	 *
	 * Uses {@see 'render_block'} filter.
	 *
	 * @param string $block_content
	 * @param array  $block
	 *
	 * @return string
	 */
	public function render_block( string $block_content, array $block ): string {
		return $block_content;
	}

	/**
	 * Render Gutenberg Blocks
	 *
	 * @param array $block
	 */
	public function block_render_callback( array $block ) {
		// convert name ("acf/testimonial") into path friendly slug ("testimonial")
		$slug = str_replace( 'acf/', '', $block['name'] );

		// include a template part from within the "includes/template-parts/blocks" folder
		if ( file_exists( get_theme_file_path( "/includes/template-parts/blocks/{$slug}.php" ) ) ) {
			$classname = sanitize_html_class( 'block--' . $slug );
			echo "<div class=\"block $classname\">";
			include( get_theme_file_path( "/includes/template-parts/blocks/{$slug}.php" ) );
			echo "</div>";
		}
	}

	/**
	 * Register Gutenberg Blocks
	 *
	 * Runs on {@see 'acf/init'} hook.
	 */
	public function register_blocks() {
		if ( ! function_exists( 'acf_register_block' ) ) {
			return;
		}

		/**
		 * Content Blocks
		 */

		 // Example Block
		acf_register_block( [
			'name' => 'example',
			'title' => __( 'Example block', 'THEME_NAME-theme' ),
			'render_callback' => [ $this, 'block_render_callback' ],
			'category' => 'THEME_NAME-content',
			'icon' => 'block-default',
			'mode' => 'edit',
			'supports' => [
				'align' => FALSE,
			]
		] );
	}

}

new Acf();

