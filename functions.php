<?php
	// allow thumbnails support
	add_theme_support( 'post-thumbnails' );

	add_action( 'after_setup_theme', 'registerFeatures' );

	//Registering menus
	function registerFeatures(){
		register_nav_menus( array(
			'main' => 'Main Menu',
			'pages' => 'Page Menu'
		) );
	}
?>