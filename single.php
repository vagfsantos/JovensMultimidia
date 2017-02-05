<?php require_once('modules/util/util.php'); ?>

<?php 
	get_header();
?>

<main>
    <?php get_template_part( 'modules/post', 'page' ); ?>
    <?php get_template_part( 'modules/ad', 'wide' ); ?>
    <?php get_template_part( 'modules/author', 'description' ); ?>
    <?php get_template_part( 'modules/ad', 'wide' ); ?>
    <?php get_template_part( 'modules/post', 'youmaylike' ); ?>
    <?php get_template_part( 'modules/ad', 'wide' ); ?>
</main>

<?php
	get_footer();
?>