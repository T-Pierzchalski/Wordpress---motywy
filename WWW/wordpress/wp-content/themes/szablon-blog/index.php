<?php get_header()?>

<!-- Sekcja posty -->
<section class="box">
    <header style="float:left;">
        


       <?php wp_login_form()?>
       <h1>Posty</h1>

    </header>
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="blog-post">
                <?php the_post_thumbnail(array(25,25), 'class=thumbnail'); ?>
                    <h2><?php the_title()?></h2>
                    <h3><?php the_date()?></h3>
                    <article><?php the_excerpt()
                    ?></article>
                        <?php the_shortlink($_text='<br>Zobacz więcej!')?>
            </div>
        <?php endwhile;?>
        <?php endif;?>
    </div>
</section>

<?php get_footer()?>