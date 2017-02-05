<html <?php language_attributes()?>>

	<head>
		<meta charset="<?php bloginfo('charset')?>" />
		<meta name="viewport" content="width=device-width" />
		<link href="https://fonts.googleapis.com/css?family=Hind:400,700|Pridi:400,700" rel="stylesheet" />
		<title><?php bloginfo('name'); wp_title('-');?></title>
		<?php wp_head()?>
	</head>

	<body <?php body_class();?>>
		<div class="l-general">

		<?php
			get_template_part( 'modules/layout', 'header' );
		?>
			
		