<?php 
	get_header();
	require_once 'components/menu.php';
?>
<section class="row">
	<main id="jm_main" class="container-fluid">
		
		<section id="jm_posts" class="row jm_category">
			<div class="group_header">
				<?php if ( have_posts() ) : ?>
					<div class="container">
						<header class="category_header">
							<h1 class="category_title">Veja o que encontramos!</h1>
							<div class="category_desc">Você buscou por <?= get_search_query() ?></div>
						</header>
					</div>
			</div>

			<div class="container">
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
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
						</article>
					<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</section>

	</main>
</section>



<?php
	get_footer();
?>