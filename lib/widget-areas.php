<?php
/**
 * Widget Areas
 *
 * @package      Bootstrap for Genesis
 * @since        1.0
 * @link         http://webdevsuperfast.github.io
 * @author       Chris Parsons <webdevsuperfast.github.io>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Register Sidebar Function
add_action( 'init', 'bfg_register_sidebars' );
function bfg_register_sidebars() {
	// Register Custom Sidebars
	genesis_register_sidebar( array(
		'id' => 'home-featured',
		'name' => __( 'Home Featured', 'the-trinity-guide-theme' ),
		'description' => __( 'This is the home featured area. It uses the jumbotron bootstrap section.', 'the-trinity-guide-theme' )
	) );
}
