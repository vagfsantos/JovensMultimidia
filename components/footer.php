<footer id="jm_footer" class="row">
	<section class="container">

		<!-- Menu social network-->
		<div class="row">
			<nav id="jm_socialnetworkfooter" class="col-sm-4 col-sm-offset-4">
				<ul>
					<li class="col-sm-3">
						<a class="social_icon" href="#" title="Curta nossa página no facebook">
							<?php require_once "icons_svg/facebook.php" ?>
						</a>
					</li>

					<li class="col-sm-3">
						<a class="social_icon" href="#" title="Siga no Pinterest">
							<?php require_once "icons_svg/pinterest.php" ?>
						</a>
					</li>

					<li class="col-sm-3">
						<a class="social_icon" href="#" title="Siga no Instagram">
							<?php require_once "icons_svg/instagram.php" ?>
						</a>
					</li>

					<li class="col-sm-3">
						<a class="social_icon" href="#" title="Canal do youtube Jovens Multimidia">
							<?php require_once "icons_svg/youtube.php" ?>
						</a>
					</li>

				</ul>
			</nav>
		</div>

		<!-- Logo JM -->
		<div class="row">
			<div id="jm_logofooter" class="col-sm-6 col-sm-offset-3">
				<img src="<?php echo esc_url( home_url( '/wp-content/themes/jovensmultimidia/img/logo_footer.svg' ) ); ?>" alt="Jovens Multimídia Logo">
			</div>
		</div>

		<!-- Menu about-->
		<div class="row">
			<div id="jm_navfooter" class="col-sm-6 col-sm-offset-3">
						
				<?php
					// menu footer
					$local = array("theme_location" => "footer");
					wp_nav_menu( $local );
				?>

			</div>
		</div>

		<div class="row">
			<div id="jm_sign">
				<p>Jovens Multimídia - Blog e educação online! <?=date("Y")?></p>
			</div>
		</div>
	</section>
</footer>