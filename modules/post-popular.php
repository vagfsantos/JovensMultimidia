<?php
    $popularPosts = get_posts(array(
        'numberposts' => 6,
        'orderby' => 'rand'
    ));
?>

<?php if( !empty($popularPosts) ): ?>
    <section class="l-row">
        <div class="l-container">
            
            <div class="m-post-box has--ad">
                <div class="c-post-box__title-box">
                    <h5 class="c-post-box__title is--audiovisual">Os populares</h5>
                </div>
                
                <div class="c-post-box__ad">
                    <?php include('ad-vertical-long.php');?>
                </div>
                
                <div class="c-post-box__list t-col-3">
                    <?php foreach ($popularPosts as $post) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'modules/layout', 'post' ); ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>