<?php
	/*
	Plugin Name: Console Blocking For Defa Protector
	Plugin URI: http://www.juthawong.com
	Description: Prevent Inject Script to steal defa protector video. Experimental
	Version: 1.0
	Author: Juthawong Naisanguansee
	Author URI: http://www.juthawong.com/
	License: GPLv2
	*/
	

	function defapreventconsolemedia(){
		wp_register_script('defaconsoleblocking', plugins_url( 'consoleblock.js', __FILE__ ),false,false, true);
		wp_enqueue_script('defaconsoleblocking');

	}
	add_action( 'wp_enqueue_scripts', 'defapreventconsolemedia' ); 