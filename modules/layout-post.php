<?php
    $mainCategory = get_the_category();
    $categoryClass = null;
    if( !empty($mainCategory) ){
        $categoryClass = strtolower($mainCategory[0] -> name);
    }
?>

<article class="m-post">
    <figure class="c-post__image-box">
        <?php if( has_post_thumbnail() ) :?>
            <a class="c-post__link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                <img src="<?php echo the_post_thumbnail_url("shelf-main");?>" alt="<?php echo get_the_title();?>" class="c-post__image <?php echo  $categoryClass?>" />
            </a>
        <?php endif; ?>
        
        <figcaption class="c-post__image-caption">
            <a class="c-post__link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                <h3 class="c-post__title js-truncate-text"><?php echo  the_title(); ?></h3>
            </a>
            
            <div class="s-post__categories <?php echo  $categoryClass?>">
                <?php echo the_category(); ?>
            </div>
            
            <a class="c-post__link" href="<?php echo get_permalink(); ?>" title="<?php echo the_title();?>">
                <p class="c-post__description">
                    <?php echo truncateText(wp_strip_all_tags( get_the_content() ), 170) . "..."; ?>
                </p>
            </a>
            <!-- TAGS -->
            <?php require('tag-clouds.php'); ?>
            <!-- END TAGS -->
        </figcaption>
    </figure>
</article>