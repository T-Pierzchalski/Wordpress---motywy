<?php 
/** 
* Template Name: wpis
* Template Post Type: post, product
*/
get_header();?>
    <div class="container px-5 py-2 my-2 bd-highlight mb-3" style="clear:both;">
        <div class="wpis px-5 py-1 my-1">
            <h2 class="my-2 py-2 fw-bold fs-2"><?php the_title();?></h2>
            <?php the_post_thumbnail();?>
             <h3 class="fs-6 fw-light"><?php the_date();?></h3>
            <p class="fs-5 py-3"><?php the_content();?></p>

        </div>
    </div>


<?php get_footer();?>