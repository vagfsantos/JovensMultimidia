<div id="jm_banners">

	<?php

	if( have_posts() ):?>
		
		<?php the_post();?>
		<div id="banner_primary" class="col-md-8">
			<a href="<?= the_permalink(); ?>" title="<?= the_title_attribute(); ?>">
				<figure>
					<?php the_post_thumbnail(); ?>
					<figcaption>
						<h1><?= the_title();?></h1>
						<p> 
							<?php 
								$conteudo = get_the_content();
								echo substr($conteudo, 0, 150)."...";
							?>
						</p>
					</figcaption>
				</figure>
			</a>
		</div>

		<?php the_post();?>
		<div class="banner_post col-md-4">
			<a href="<?= the_permalink(); ?>" title="<?= the_title_attribute(); ?>">
				<figure>
					<?php the_post_thumbnail(); ?>
					<figcaption>
						<h1><?= the_title();?></h1>
					</figcaption>
				</figure>
			</a>
		</div>

		<?php the_post();?>
		<div class="banner_post col-md-4">
			<a href="<?= the_permalink(); ?>" title="<?= the_title_attribute(); ?>">
				<figure>
					<?php the_post_thumbnail(); ?>
					<figcaption>
						<h1><?= the_title();?></h1>
					</figcaption>
				</figure>
			</a>
		</div>

	<?php
	endif;
	?>

</div>