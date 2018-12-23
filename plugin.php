<?php
/**
 * Plugin Name: Example broken Image block via create-guten-block plugin.
 * Description: Created via create-guten-block.
 */

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * @since 1.0.0
 */
function action_block_cgb_editor_assets() { // phpcs:ignore
	// Scripts.
	wp_enqueue_script(
		'action_block-cgb-block-js', // Handle.
		plugin_dir_url( __FILE__ ) . '/dist/blocks.build.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), // Dependencies, defined above.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: File modification time.
		true // Enqueue the script in the footer.
	);
}

// Hook: Editor assets.
add_action( 'enqueue_block_editor_assets', 'action_block_cgb_editor_assets' );
