
<?php require_once('modules/util/util.php'); ?>

<?php 
	get_header();
?>

<main>
    <?php get_template_part( 'modules/home/home', 'slider' ); ?>
    <?php get_template_part( 'modules/post', 'lastest' ); ?>
    <?php get_template_part( 'modules/post', 'popular' ); ?>
    <?php get_template_part( 'modules/post', 'youmaylike' ); ?>
</main>

<?php
	get_footer();
?>