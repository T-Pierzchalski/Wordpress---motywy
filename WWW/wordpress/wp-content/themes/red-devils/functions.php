<?php add_theme_support('post_thumbnail');?>

<?php add_theme_support( 'custom-logo',[
    		'height'               => 165,
            'width'                => 180,
            'flex-height'          => true,
            'flex-width'           => false,
            'header-text'          => ['site-title', 'site-description'],
        ]);?>


<?php function custom_excerpt_length( $length ) {
    return 40;
}?>
