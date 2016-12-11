<header class="m-header l-row">
	
	<div class="l-container">
		<div class="c-header__logo">
			<a href="<?php get_home_url()?>" class="c-header__logo-link">Jovens Multimídia - Estude mais, para ser mais</a>
		</div>

		<?php wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container' => 'nav',
				'container_class' => 'c-header__main-nav',
				'menu_class' => 'c-header__main-nav-list s-header__main-nav-list'
				)
		); ?>

		<nav class="c-header__secondary-nav">
			<span class="c-header__menu-icon">Abrir mais opções de menu</span>

			<?php wp_nav_menu(
				array(
					'theme_location' => 'pages',
					'container' => 'div',
					'container_class' => 'c-header__secondary-drop',
					'menu_class' => 'c-header__secondary-drop-list s-header__secondary-drop-list'
					)
			); ?>
		</nav>
	</div>
	
</header>