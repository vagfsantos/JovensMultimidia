<?php
	// import CSS's
	function addCssFile(){
		wp_enqueue_style("style", get_stylesheet_uri());
		wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '20120208', 'all' );

		wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array(), false, true );

		wp_enqueue_style( 'main' );
		wp_enqueue_script( 'main' );
	}

	function jovensmultimidia_theme_customizer($wp_customize){
		$wp_customize -> add_section("jovensmultimida_logo_section", array(
			"title" 		=> __('Logo', 'JovensMultimidia'),
			"priority" 		=> 30,
			"description" 	=> "Upload your brand"
		));

		$wp_customize -> add_setting("jovensmultimidia_logo");

		$wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, "title-box", array(
				"label" => __("Add Logo", "JovensMultimida"),
				"section" => "jovensmultimida_logo_section",
				"settings" => "jovensmultimidia_logo"
			) ));
	}

	add_action("wp_enqueue_scripts","addCssFile");
	add_action( 'customize_register', 'jovensmultimidia_theme_customizer' );

	// Registering nav menus
	register_nav_menus(
		array(
			"primary" => "Primary Menu"
			)
		);

	// Registering nav footer
	register_nav_menus(
		array(
			"footer" => "Footer Menu"
			)
		);

	// allow thumbnails support
	add_theme_support( 'post-thumbnails' ); 

?>