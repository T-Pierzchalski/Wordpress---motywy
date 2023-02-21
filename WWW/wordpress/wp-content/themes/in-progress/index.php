<?php get_header()?>
<form class="sidebar my-4 sticky-top-xxl">
  <div class="form-group">
    <label for="categorySelect">Kategorie:</label>
    <select class="form-control" id="categorySelect">
      <option>Wszystkie</option>
      <option>Elektronika</option>
      <option>Moda</option>
      <option>Sport</option>
    </select>
    <select class="form-control" id="categorySelect">
      <option>Wszystkie</option>
      <option>Elektronika</option>
      <option>Moda</option>
      <option>Sport</option>
    </select>
    <select class="form-control" id="categorySelect">
      <option>Wszystkie</option>
      <option>Elektronika</option>
      <option>Moda</option>
      <option>Sport</option>
    </select>
  </div>
  <div class="form-group">
    <label for="priceRange">Zakres cen:</label>
    <input type="range" class="form-control-range" id="priceRange">
    <br>
    <input type="text" id="priceRange" placeholder="Cena">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="onlyAvailable">
    <label class="form-check-label" for="onlyAvailable">Tylko dostępne</label>
  </div>
  <button type="submit" class="btn btn-primary">Filtruj</button>
</form>
    <div class="container px-2 py-2 my-2 d-flex flex-row bd-highlight mb-3 flex-wrap"></div>
    

<?php get_footer()?>