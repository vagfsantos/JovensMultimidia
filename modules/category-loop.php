<section class="l-row">
    <div class="l-container">
       <div class="m-category__loop">
            <?php
            if( have_posts() ):
                while( have_posts() ) : the_post() ?>
                
                <?php get_template_part( 'modules/layout', 'post' ); ?>
                
            <?php  
                endwhile;
            endif;
            ?>
       </div>
    </div>
</section>