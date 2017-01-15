<?php
    $mainCategory = get_the_category();
    $categoryClass = null;
    if( !empty($mainCategory) ){
        $categoryClass = strtolower($mainCategory[0] -> name);
    }
?>
  
   <section class="l-row">
    <div class="l-container">
       
       <?php 
        while( have_posts() ): the_post();?>
            <article>
                <header class="m-banner-single <?php echo $categoryClass; ?>">
                    <div class="c-banner-single__image">
                        <?php echo the_post_thumbnail(); ?>
                    </div>

                    <div class="c-banner-single__info-box">
                       <div class="c-banner-single__info-wrapper">
                           <h1 class="c-banner-single__title"><?php echo the_title('', false); ?></h1>
                           
                           <span class="c-banner-single__date">
                               Postado em: <strong><?php echo the_date('d/m/Y');?></strong>
                           </span>
                           <span class="c-banner-single__date">
                               Escrito por: <strong><?php echo the_author_link();?></strong>
                           </span>
                           
                           <p class="c-banner-single__description">
                               <?php echo wp_strip_all_tags( get_the_excerpt() ) ?>
                           </p>
                       </div>
                    </div>
                </header>
                
                <div class="m-content-sigle">
                   
                   <div class="c-content-sigle__post">
                        <?php echo the_content(); ?>
                   </div>
                   
                   <aside class="c-content-sigle__side">
                       
                   </aside>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    </div>
</section>