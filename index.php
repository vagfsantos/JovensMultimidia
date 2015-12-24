<?php 
	get_header();
?>

<?php
	if( have_posts() ):
		while( have_posts() ): the_post(); ?>
	
			<div class="col-sm-12">
				<?php the_title(); ?>
			</div>

			<div class="col-sm-6">
				<?php the_content(); ?>
			</div>
	
<?php 	endwhile;
	endif;
?>



<?php
	get_footer();
?>