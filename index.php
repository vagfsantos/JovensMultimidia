<?php 
	get_header();
?>

<main>
    <?php get_template_part( 'modules/home/home', 'slider' ); ?>
    <?php get_template_part( 'modules/post', 'lastest' ); ?>
</main>

<?php
	get_footer();
?>