<?php
/**
 * Plugin for block style variation as example block for KrautPress article.
 *
 * @license GPL-2.0+
 * @package krautpress/block-style-variation
 *
 * @wordpress-plugin
 * Plugin Name: KrautPress block style variation
 * Description: A plugin that adds a block style variation to the list block.
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
		'krautpress-gutenberg-block-style-variation-editor-script',
		plugins_url( 'assets/js/editor.blocks.js', __FILE__ ),
		[ 'wp-blocks', 'wp-element' ]
	);

	wp_enqueue_style(
		'krautpress-gutenberg-block-style-variation-editor-style',
		plugins_url( 'assets/css/editor.blocks.css', __FILE__ )
	);
} );

/**
 * Enqueue styles for backend and frontend.
 */
add_action( 'enqueue_block_assets', function() {
	wp_enqueue_style(
		'krautpress-gutenberg-block-style-variation-frontend-style',
		plugins_url( 'assets/css/frontend.blocks.css', __FILE__ )
	);
} );
