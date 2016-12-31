<?php
    
   $sliderPosts = get_posts(array(
        'numberposts' => 3
   ));

?>



<?php if( !empty($sliderPosts) ): ?>
        <section class="l-row">
            <div class="l-container">
               <div class="m-banner-main">
                
                <?php foreach ($sliderPosts as $post) : setup_postdata( $post ); ?>
                    
                    <?php
                        $mainCategory = get_the_category();
                        $categoryClass = null;
                        if( !empty($mainCategory) ){
                            $categoryClass = strtolower($mainCategory[0] -> name);
                        }
                   ?>
                    
                    <div class="c-banner-main__item <?php echo  $categoryClass?>">
                        <div class="c-banner-main__image">
                            <a class="c-banner-main__post-link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                                <?php if( has_post_thumbnail() ) :?>
                                    <img src="<?php echo the_post_thumbnail_url("banner-main"); ?>" alt="<?php echo get_the_title();?>" />
                                <?php endif;?>
                            </a>
                        </div>
                    
                    
                        <div class="c-banner-main__info-box">
                            <div class="c-banner-main__info-text">
                                <a class="c-banner-main__post-link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                                    <h2 class="c-banner-main__post-title <?php echo  $categoryClass?>"><?php echo the_title(); ?></h2>
                                </a>
                                <div class="s-banner-main__categories <?php echo  $categoryClass?>">
                                    <?php echo the_category(); ?>
                                </div>
                                <a class="c-banner-main__post-link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                                    <p class="c-banner-main__description <?php echo  $categoryClass?>">
                                        <?php echo wp_strip_all_tags( get_the_content() ); ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                   </div>
                    
                <?php endforeach; ?>
                
                </div>
            </div>
        </section>
        
        <?php wp_reset_postdata(); ?>
<?php endif; ?>
