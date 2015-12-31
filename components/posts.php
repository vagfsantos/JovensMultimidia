<section id="jm_posts" class="row">
	<div class="container">
		<?php 
			if( have_posts() ):
				$limitPosts = 1;
				while( have_posts() && $limitPosts <= 6): the_post(); ?>

					<article class="col-md-4">
						<a href="<?= the_permalink(); ?>" title="<?= the_title_attribute(); ?>">
							<figure>
								<?= the_post_thumbnail(); ?>
								<figcaption>
									<h1><?= get_the_title(); ?></h1>
								</figcaption>
							</figure>
						</a>
					</article>

				<?php
				$limitPosts++; // increment limit post var
				endwhile;
			endif;
		?>
	</div>
</section>