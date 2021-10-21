<?php
/*
Plugin name: SMG Plugin Exercise
Description: Just a test.
Author: Eric Fraze
Version: 1.0.0
*/

/**
 * There are a few issues with this plugin causing it to error and behave unexpectedly.
 *
 * Please fix the errors, then the unexpected behavior.
 *
 * When loaded, this plugin should make the website blank and display: "Great job!" on the website.
 * Two alerts should appear, in this order: "Great", "job!".
 */

if ( class_exists( 'SMG_Plugin_Exercise' ) ) {
	return;
}

class SMG_Plugin_Exercise {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'wp_enqueue_styles', array( __CLASS__, 'add_styles' ) );
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'add_scripts' ) );
	}

	public function add_scripts() {
		$root_url = plugins_url( '', __FILE__ );

		// Fix this load order WITHOUT moving any lines. Use wp_enqueue_script parameters to solve.
		wp_enqueue_script( 'smg-plugin-exercise-js-2', $root_url . 'js/test-2.js', [], 1, true );

		wp_enqueue_script( 'smg-plugin-exercise-js', $root_url . 'js/test.js', [], 1, true );
	}

	public function add_styles() {
		$root_url = plugins_url( '', __FILE__ );

		// Fix this style enqueue.
		wp_enqueue_style( 'smg-plugin-exercise-css', $root_url . 'css/style.css', [], 1, true );
	}
}

new SMG_Plugin_Exercise();
