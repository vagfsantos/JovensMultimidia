<?php
    
   $sliderPosts = get_posts(array(
        'numberposts' => 3
   ));

?>



<?php if( !empty($sliderPosts) ): ?>
        <section class="l-row">
            <div class="l-container">
                <?php foreach ($sliderPosts as $post) : setup_postdata( $post ); ?>
            
                    <p><?php echo the_title();?></p>
                    
                <?php endforeach; ?>
            </div>
        </section>
        
        <?php wp_reset_postdata(); ?>
<?php endif; ?>
