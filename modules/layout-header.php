<header class="m-header l-row">
	
	<div class="l-container">
		<div class="c-header__logo">
			<a href="<?= get_home_url()?>" class="c-header__logo-link"><?= get_bloginfo('name') . '-' . get_bloginfo('description')?></a>
		</div>
        
        <a href="#" class="c-header__trigger-menu-mobile js--trigger-menu-mobile">Menu</a>
        
		<?php wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container' => 'nav',
				'container_class' => 'c-header__main-nav js--main-nav',
				'menu_class' => 'c-header__main-nav-list s-header__main-nav-list'
				)
		); ?>

		<nav class="c-header__secondary-nav">
			<span class="c-header__menu-icon js-header__open-secondary">Abrir mais opções de menu</span>

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