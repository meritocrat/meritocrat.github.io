<?php 
include("header.php");
?>


<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
    <li data-target="#carousel-example" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="images/carousel1.jpg" /></a>
    <div class="carousel-caption">
        <h3><a href="#">NOTICIAS</a></h3>
        <h3 class="slide-border"></h3>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="images/caroussel2.jpg" /></a>
  
      <div class="carousel-caption">
        <h3><a href="#">INSTITUCIONAL</a></h3>
        <h3 class="slide-border"></h3>
      </div>

    </div>
    <div class="item">
      <a href="#"><img src="images/carousel03(edit).jpg" /></a>
  
    <div class="carousel-caption">
        <h3><a href="#">AREAS DE NEGOCIO</a></h3>
        <h3 class="slide-border"></h3>
      </div>

    </div>

    <div class="item">
      <a href="#"><img src="images/carousel4.jpg" /></a>
  
    <div class="carousel-caption">
        <h3><a href="#">CONTATO</a></h3>
        <h3 class="slide-border"></h3>
      </div>

    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="fa fa-angle-left" aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="fa fa-angle-right"></span>
  </a>
</div>


<?php 
include("footer.php");
?>
