<header id="jm_header">
	<div class="container">
		
		<nav class="nav_primary">
			<!-- Logo NAV-->
			<div id="jm_logo" class="logo col-sm-3">
				<?php if ( get_theme_mod( 'jovensmultimidia_logo' ) ) : ?>
				    
			        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			        	<img src="<?php echo esc_url( get_theme_mod( 'jovensmultimidia_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			        </a>
				    
				<?php else : ?>
				    <hgroup>
				        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
				        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
				    </hgroup>
				<?php endif; ?>
			</div>
			
			<div id="jm_navbar" class="col-sm-8">
				
				<?php
					// menu primary
					$local = array("theme_location" => "primary");
					wp_nav_menu( $local );
				?>

			</div>

			<div id="jm_search" class="col-sm-1">
				<button><img src="<?php echo esc_url( home_url( '/wp-content/themes/jovensmultimidia/img/search.svg' ) ); ?>" alt="Pesquisar"></button>
			</div>
		</nav>

	</div>
</header>