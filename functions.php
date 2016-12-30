<?php
	// allow thumbnails support
	add_theme_support( 'post-thumbnails' );

    // Registering assets
    wp_enqueue_style( 'main-css', get_template_directory_uri().'/build/css/main.min.css', array(), false, 'all');
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/build/js/main.min.js', array(), false, true);

	//Registering menus
    add_action( 'after_setup_theme', function(){
		register_nav_menus( array(
			'main' => 'Main Menu',
			'pages' => 'Page Menu',
            'footer' => 'Footer Menu'
		) );
	});

    //thumbnail sizes
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'banner-main', 720, 420, array( 'center', 'center' ) );
    add_image_size( 'shelf-main', 240, 165, array( 'center', 'center' ) );
?>