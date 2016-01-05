<section id="jm_posts" class="row">
	<div class="container">
		<?php 
			if( have_posts() ):

				while( have_posts() ): the_post(); $category = get_the_category(); ?>

					<article class="col-md-4">
						<a href="<?= the_permalink(); ?>" title="<?= the_title_attribute(); ?>">
							<figure>
								<div class="inset_shadow"></div>
								<?= the_post_thumbnail(); ?>
								<figcaption>
									<h1><?= get_the_title(); ?></h1>
								</figcaption>
							</figure>
						</a>
						<div class="category">
									
							<?php 
								foreach ($category as $c): ?>
									<div>
										<a href="" title="<?= $c -> name ?>">
										<?php 
										if ( $c -> slug ){
											require "icons_svg/c_".$c -> slug.".php";
										} ?>
										</a>
									</div>
								<?php
								endforeach;
							?>

						</div>
					</article>

				<?php
				endwhile;
			endif;
		?>

		<?php wp_reset_query(); ?>
	</div> <!-- end container -->
</section>

<section class="row">
	<div class="container">
		<div class="pagination col-xs-12">
			<div class="older">
				<?php next_posts_link(""); ?>
			</div>

			<div class="newer">
				<?php previous_posts_link(""); ?>
			</div>
		</div>
	</div>
</section>