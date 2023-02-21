<?php get_header()?>



   <div class="container px-2 py-2 my-2 d-flex flex-row bd-highlight mb-3 flex-wrap" style="clear:both;">
   <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="blog-post">
                <?php the_post_thumbnail(array(25,25), 'class=thumbnail'); ?>
                    <h2><?php the_title()?></h2>
                    <h3 class="fs-6 fw-light"><?php the_date()?></h3>
                        <?php the_content();?>
                        
                        <h3 class="fw-light fs-6 float-end px-2"><?php the_shortlink($_text='<br>Zobacz więcej!')?></h3>
            </div>
        <?php endwhile;?>
        <?php endif;?> 
    </div>


<?php get_footer();?>