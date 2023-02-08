<?php 
/** 
* Template Name: kontakt
*/
get_header();?>
      <div class="container px-5 py-2 my-2" style="clear:both;">
      <p class="my-1 p-3">
      <?php the_content()?>
</p>
      <div class="mb-3 my-3 p-3">
  <label for="exampleFormControlInput1" class="form-label">Adres Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@xyz.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Treść:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
      </div>

<?php get_footer()?>