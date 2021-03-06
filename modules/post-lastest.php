<?php
    $lastPosts = get_posts(array(
        'numberposts' => 4,
        'offset' => 3
    ));
?>

<?php if( !empty($lastPosts) ): ?>
    <section class="l-row">
        <div class="l-container">
            
            <div class="m-post-box">
                <div class="c-post-box__title-box">
                    <h5 class="c-post-box__title is--behavior">Os mais recentes</h5>
                </div>
                
                <div class="c-post-box__list t-col-4">
                    <?php foreach ($lastPosts as $post) : setup_postdata( $post ); ?>
                        <?php get_template_part( 'modules/layout', 'post' ); ?>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <?php wp_reset_postdata(); ?>
<?php endif; ?>