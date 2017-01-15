<div class="l-row">
   <div class="l-container">
        <section class="m-author">
           <div class="c-author__img">
                <?php echo get_avatar( get_the_author_email() ); ?>
            </div>

            <div class="c-author__about">
                <h4 class="c-author__title">Um pouco mais sobre quem escreveu:</h4>
                <h2 class="c-author__name"><?php the_author_posts_link(); ?></h2>
                <p class="c-author__description"><?php the_author_description(); ?></p>
            </div>
        </section>
    </div>
</div>