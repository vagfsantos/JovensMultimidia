<?php 
	get_header();
	require_once 'components/menu.php';
?>
<section class="row">
	<main id="jm_single" class="container-fluid">
		<article>
			<section class="header_single">
				<div class="row">
					<div class="container">
						<div class="col-sm-8">
							<?php the_post_thumbnail(); ?>
						</div>

						<div class="col-sm-4">
							<h1 class="title_single"><?= the_title(); ?></h1>
						</div>
					</div>
				</div>
			</section>

			<section class="row">
				<div class="container">
					<div class="col-xs-12 body_post_single">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta inventore aliquam illum veniam sapiente sequi laborum quis aut, neque sit et numquam illo voluptate minima architecto accusamus sint odio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta inventore aliquam illum veniam sapiente sequi laborum quis aut, neque sit et numquam illo voluptate minima architecto accusamus sint odio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta inventore aliquam illum veniam sapiente sequi laborum quis aut, neque sit et numquam illo voluptate minima architecto accusamus sint odio.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta inventore aliquam illum veniam sapiente sequi laborum quis aut, neque sit et numquam illo voluptate minima architecto accusamus sint odio.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim soluta inventore aliquam illum veniam sapiente sequi laborum quis aut, neque sit et numquam illo voluptate minima architecto accusamus sint odio.</p>
					</div>
				</div>
			</section>
		</article>
	</main>
</section>



<?php
	get_footer();
?>