<?php 
/** 
* Template Name: main-site
*/
get_header();?>


<div class="slajder px-5 py-2 my-2 color3 bd-highlight mb-3" style="clear:both;">
<!-- slajder -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active s-item">
      <a href="#" target="_blank"><img src="https://e0.365dm.com/22/04/2048x1152/skysports-erik-ten-hag_5731082.png" class="d-block s-img" alt="Erik ten Hag">
      <div class="carousel-caption d-none d-md-block caption">
        <h5>Erik ten hag - Człowiek, który odmienił Manchester United!</h5>
        <p>United pod wodzą Erika Ten Haga odzyskało dawny blask</p>
      </div></a>
    </div>
    <div class="carousel-item s-item">
    <a href="#" target="_blank"><img src="https://a1.espncdn.com/combiner/i?img=%2Fphoto%2F2023%2F0204%2Fr1126607_1296x729_16%2D9.jpg" class="d-block s-img" alt="Marcus Rashford">
      <div class="carousel-caption d-none d-md-block caption">
        <h5>Rashford znowu z golem. Dramatyczna końcówka na Old Trafford!</h5>
        <p>W sobotnim meczu w Crystal Palace rashford już 11 raz znalazł się na liście strzelców. Dramatyczną końcówke zafundował casemiro, który niestety opuści 3 następne spotkania. </p>
      </div></a>
    </div>
    <div class="carousel-item s-item">
    <a href="#" target="_blank"><img src="https://e0.365dm.com/23/01/2048x1152/skysports-marcel-sabitzer-manchester-united_6042378.jpg" class="d-block s-img" alt="Marcel Sabitzer">
      <div class="carousel-caption d-none d-md-block caption">
        <h5>Marcel Sabitzer zaliczył pozytywny debiut już w pierwszym meczu!</h5>
        <p>W wyniku czerwonej kartki dla Casemiro podczas meczu z Crystal Palace Erik Ten Hag musiał zmienić jednego z napastników. Wybór nieoczekiwanie wpadł na nowy nabytek - <strong>Marcela Sabitzera</strong>!
        </p>
      </div></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- koniec slajdera -->
</div>
<?php get_footer();?>