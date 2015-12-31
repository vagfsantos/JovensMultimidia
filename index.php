<?php 
	get_header();
	require_once 'components/menu.php';
?>
<section class="row">
	<main id="jm_main" class="container-fluid">
		<?php
			require_once 'components/banner.php';
			require_once 'components/posts.php';
		?>
	</main>
</section>



<?php
	get_footer();
?>