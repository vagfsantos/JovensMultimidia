<?php require_once('modules/util/util.php'); ?>

<?php 
	get_header();
?>

<main>
    <?php get_template_part( 'modules/post', 'page' ); ?>
    <?php get_template_part( 'modules/author', 'description' ); ?>
    <?php get_template_part( 'modules/post', 'youmaylike' ); ?>
</main>

<?php
	get_footer();
?>