<?php $category = get_template_directory_uri() . '/build/img/' . strtolower(trim(single_cat_title('', false)));?>
<div class="js-get-category-active" style="display: none">$category</div>

<section class="l-row">
    <div class="l-container">
       <div class="m-banner-category <?php echo $category; ?>">
            <div class="c-banner-category__image">
                <?php echo "<img src='{$category}.jpg'/>"; ?>
            </div>
            
            <div class="c-banner-category__info-box">
               <div class="c-banner-category__info-wrapper">
                   <h1 class="c-banner-category__title"><?php echo single_cat_title('', false); ?></h1>
                   <p class="c-banner-category__description">
                       <?php echo wp_strip_all_tags( category_description() ) ?>
                   </p>
               </div>
            </div>
       </div>
    </div>
</section>