<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen"/>
	<title>Strona testowa</title>
	<?php wp_head(); ?>
	
</head>
<body>
	<div id="header">
	<div class="logo">
     <?php if( has_custom_logo() ):  ?>
                        <?php 
                            // Get Custom Logo URL
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            $custom_logo_url = $custom_logo_data[0];
                        ?>

                        <a href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home">

                            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

                        </a>
                    <?php else: ?>
                        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
</div>	
		<h1>
		<a href="<?php print home_url('/'); ?>" rel="home"><?php bloginfo('name');?></a>
</h1>
		<?php bloginfo('description');?>
</div>
<?php wp_nav_menu();?>


<div id="main">