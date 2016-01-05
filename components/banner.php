<section id="jm_banners" class="row">
	<div class="container">
		<?php
		$currentPage = ( get_query_var("paged") ) ? get_query_var("paged") : 1;
		$numPosts = array("posts_per_page" => 9, "paged" => $currentPage);
		query_posts($numPosts);

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
</section>