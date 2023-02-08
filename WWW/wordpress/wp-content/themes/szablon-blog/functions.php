<?php add_theme_support('post_thumbnails');?>
<?php register_nav_menu('podstawowe', 'Podstawowe menu');?>


<?php add_theme_support( 'custom-logo',[
    		'height'               => 229,
            'width'                => 250,
            'flex-height'          => false,
            'flex-width'           => false,
            'header-text'          => ['site-title', 'site-description'],
        ]);?>


<?php function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>