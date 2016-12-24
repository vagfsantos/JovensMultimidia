<?php
	// allow thumbnails support
	add_theme_support( 'post-thumbnails' );

	
    add_action( 'after_setup_theme', 'registerFeatures' );

	//Registering menus
	function registerFeatures(){
		register_nav_menus( array(
			'main' => 'Main Menu',
			'pages' => 'Page Menu',
            'footer' => 'Footer Menu'
		) );
	}


    function files(){
        wp_enqueue_style( 'main-css', get_template_directory_uri().'/build/css/main.min.css', array(), false, 'all');
        wp_enqueue_script( 'main-js', get_template_directory_uri().'/build/js/main.min.js', array(), false, true);
    }

    files();
?>