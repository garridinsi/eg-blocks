<?php
/**
 * Plugin Name:       EG Blocks
 * Plugin URI:        https://enekogarrido.com
 * Description:       Block collection for gutenberg
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.0.1
 * Author:            garridinsi
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       eg-blocks
 *
 * @package           eg
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function eg_eg_blocks_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'eg_eg_blocks_block_init' );
