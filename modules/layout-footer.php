<footer class="m-footer l-row">
    <div class="l-container">
       
       <?php wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'container' => 'nav',
				'container_class' => 'c-footer__main-nav',
				'menu_class' => 'c-footer__main-nav-list s-footer__main-nav-list'
				)
		); ?>
        
        <div class="c-footer__logo">
			<a href="<?php get_home_url()?>" class="c-footer__logo-link"><?php echo get_bloginfo('name') . '-' . get_bloginfo('description')?></a>
		</div>
   
    </div>
</footer>