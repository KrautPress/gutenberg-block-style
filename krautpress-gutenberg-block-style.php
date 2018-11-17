<?php
/**
 * Plugin for custom list block style as example for KrautPress article.
 *
 * @license GPL-2.0+
 * @package krautpress/block-style
 *
 * @wordpress-plugin
 * Plugin Name: KrautPress block style
 * Description: A plugin that adds a block style to the list block.
 * Version:     0.1.0
 * Author:      Florian Brinkmann
 * Author URI:  https://florianbrinkmann.com/en/
 * License:     GPL v2 http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Enqueue block script and backend stylesheet.
 */
add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_script(
		'krautpress-gutenberg-block-style-editor-script',
		plugins_url( 'assets/js/editor.blocks.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element', 'wp-edit-post', 'lodash' ]
	);

	wp_enqueue_style(
		'krautpress-gutenberg-block-style-editor-style',
		plugins_url( 'assets/css/editor.blocks.css', __FILE__ )
	);
} );

/**
 * Enqueue styles for backend and frontend.
 */
add_action( 'enqueue_block_assets', function() {
	wp_enqueue_style(
		'krautpress-gutenberg-block-style-frontend-style',
		plugins_url( 'assets/css/frontend.blocks.css', __FILE__ )
	);
} );
