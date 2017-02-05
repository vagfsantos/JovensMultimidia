<section class="l-row">
    <div class="l-container">
       <?php 
        while( have_posts() ): the_post();?>
            <div class="m-content-page">

               <h1 class="c-content-page__title">
                   <?php echo the_title(); ?>
               </h1>

               <div class="c-content-page__post">
                    <?php echo the_content(); ?>
               </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</section>