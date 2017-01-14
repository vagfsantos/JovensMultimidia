<?php require_once('modules/util/util.php'); ?>

<?php 
	get_header();
?>

<main>
    <?php get_template_part( 'modules/category', 'banner' ); ?>
    <?php get_template_part( 'modules/category', 'loop' ); ?>
    <?php get_template_part( 'modules/layout', 'pagination' ); ?>
</main>

<?php
	get_footer();
?>