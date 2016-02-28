<?php
	get_header();
	require_once 'components/menu.php';
?>
<section class="row">
	<main id="jm_single" class="container-fluid">
		<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
		<article>
			<section class="header_single">
				<div class="row">
					<div class="container">
						<div class="col-xs-12">
							<h1 class="title_single"><?= the_title(); ?></h1>
							<ul class="postmetadata clearfix">
								<li class="author">By <?php the_author_posts_link(); ?></li>
								<li><?php the_time('l, F jS, Y') ?></li>
								<li><?php the_category(', ') ?></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- After Post Title -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-3231161504322283"
						     data-ad-slot="8361607651"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>
			</div>


			<section class="row">
				<div class="container">
					<div class="col-xs-12 body_post_single">
						<?php the_content(); ?>
					</div>
				</div>
			</section>

			<div class="row">
				<div class="container">
					<div class="col-xs-12">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- After Post Content -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-3231161504322283"
						     data-ad-slot="9838340859"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>
			</div>

			<section class="row">
				<div class="container">
					<div class="col-xs-12 author">
						<?php echo get_avatar( get_the_author_email(), $size = '150'); ?>
						<div class="authortext">
							<h4>Sobre o autor <?php the_author_posts_link(); ?></h4>
							<p><?php the_author_description(); ?></p>
						</div>
					</div>
				</div>
			</section>

		<?php endwhile; endif; ?>
		</article>
	</main>
</section>



<?php
	get_footer();
?>
