<?php

	function addCssFile(){
		wp_enqueue_style("style", get_stylesheet_uri());
		wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '20120208', 'all' );

		wp_enqueue_style( 'main' );
	}

	add_action("wp_enqueue_scripts","addCssFile");

?>