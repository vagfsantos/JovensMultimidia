<?php 
	get_header();
	require_once 'components/menu.php';
?>
<section id="jm_posts" class="row jm_category">
	<div class="group_header">
		<?php if ( have_posts() ) : ?>
			<div class="container">
				<header class="category_header">
					<h1 class="category_title"><?php printf( __( '%s', 'jovensmultimia' ), single_cat_title( '', false ) ); ?></h1>

					<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="category_desc"><?php echo category_description(); ?></div>
					<?php endif; ?>
				</header>
			</div>
	</div>

	<div class="row jm_add">
		<div class="container">
			<div class="col-xs-12">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- After Categoria title -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-3231161504322283"
			     data-ad-slot="3636919655"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			</div>
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
		<?php endif; ?>
	</div>
</section>

<div class="row jm_add">
	<div class="container">
		<div class="col-xs-12">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Categoria footer -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-3231161504322283"
			     data-ad-slot="7787917652"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</div>

<?php
	get_footer();
?>