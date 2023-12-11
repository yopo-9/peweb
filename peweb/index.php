<?php
require('function.php');
include('components/header.php');
include('components/navbar.php');


?>


<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide mx-5 mt-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner rounded">
    <div class="carousel-item active">
      <img src="assets/img/1111.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/1111.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- 

<div id="caraorder" class="px-4 py-4 bg-secondary text-center">
  <div class="mx-auto w-75">
    <h3>cara order.</h3>
    <p class="text-center"></p>

  </div>
</div> <br><br>

<div id="aboutus" class="px-4 py-4 bg-secondary text-center">
  <div class="mx-auto w-75">
    <h3>About Us.</h3>
    <p class="text-center"></p>

  </div>
</div> -->





<?php include("produk.php"); ?>
<?php include("contacus.php"); ?>
<?php include("components/footer.php"); ?>