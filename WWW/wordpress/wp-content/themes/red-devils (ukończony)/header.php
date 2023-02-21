<!DOCTYPE html>
<html>
<head>
<title>Strona testowa</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/style.css" type="text/css" media="screen">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <div class="header-nav mx-md-5 ">
  <nav class="nav fs-6 fw-bold justify-content-end">
  <ul class="nav">
  <li class="nav-item mx-3">
    <a class="nav-link active" href="https://www.facebook.com" target="_blank">Facebook</a>
  </li>
  <li class="nav-item mx-3">
    <a class="nav-link" href="https://www.instagram.com" target="_blank">Instagram</a>
  </li>
  <li class="nav-item mx-3">
    <a class="nav-link" href="https://twitter.com/?lang=pl" target="_blank">Twitter</a>
  </li>
  <li class="nav-item me-3">
    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Rozwiń</a>
  </li>
</ul>
</nav>



<nav class="navbar navbar-expand-lg  px-5 d-flex width sticky-xxl-top sticky-xl-top" style="clear:both;">
    <div class="justify-content-end fs-5 fw-bolder" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="http://users.wwwlab.uci.umk.pl/~307157/wordpress/">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://users.wwwlab.uci.umk.pl/~307157/wordpress/aktualnosci/">Aktualności</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://users.wwwlab.uci.umk.pl/~307157/wordpress/galeria-zdjec/">Galeria zdjęć</a>
        </li>
        <li class="nav-item drop"><button class="border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><a class="fs-4 fw-bolder nav-item" href="#">Twórcy</a></button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://users.wwwlab.uci.umk.pl/~307157/wordpress/kontakt-2/">Kontakt</a></li>
            <li class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://users.wwwlab.uci.umk.pl/~307157/wordpress/tworcy/">Współpraca</a></li>
          </ul>
        </li>

      <li class="nav-item ">
      <form role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success fw-bold" type="submit">Wyszukaj</button>
      </form>
</li>
      </ul>
    </div>

</nav>
<div class="logo img-thumbnail mx-5">
     <?php if( has_custom_logo() ):  ?>
                        <?php 
                            // Get Custom Logo URL
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            $custom_logo_url = $custom_logo_data[0];
                        ?>

                        <a class="navbar-brand fs-2 fw-bold" href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home">

                            <img src="<?php echo esc_url( $custom_logo_url ); ?>" class="img-scale"
                                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

                        </a>
                        <a class="navbar-brand fs-2 fw-bold" href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home"><h1>Red Devils</h1></a>

                    <?php else: ?>
                        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            </div>
<?php wp_head()?>
</head>
<body class="mx-5">
