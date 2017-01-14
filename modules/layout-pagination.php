<section class="l-row">
   <div class="l-container">
       <div class="m-pagination">
            <?php the_posts_pagination( array(
                'screen_reader_text' => 'Paginação dos posts',
                'mid_size' => 2,
                'prev_text' => __( 'Voltar', 'textdomain' ),
                'next_text' => __( 'Ver Mais Posts', 'textdomain' ),
            ) ); ?>
       </div>
   </div>
</section>