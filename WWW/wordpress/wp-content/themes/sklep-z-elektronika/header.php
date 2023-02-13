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


  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    
  <div class="logo ms-3 rounded text-center"> Tu jest LOGO</div>
  <div class="top-nav d-flex flex-column">
    <div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline" role="search">
        <input class="form-control me-2" type="search" placeholder="Szukaj" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Szukaj</button>
      </form>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="clear:both">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0  justify-content-center fw-bold text-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sprzęt rtv</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Telefony komórkowe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Telewizory</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gaming
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Komputery</a></li>
            <li><a class="dropdown-item" href="#">Monitory</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Akcesoria</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">Sprzęt fotograficzny</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- logowanie -->
  <div class="d-flex flex-column me-3">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
  Logowanie
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="2loginModal">
  <a href="#">Rejestracja</a>
</button>
</div>

</nav>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formularz logowania</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="username">Login</label>
            <input type="text" class="form-control" id="username" placeholder="Wprowadź login">
          </div>
          <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" class="form-control" id="password" placeholder="Wprowadź hasło">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-primary">Zaloguj się</button>
      </div>
    </div>
  </div>
</div>



  </head>
  <body>