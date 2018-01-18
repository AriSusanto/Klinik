@extends('template.tampilanmenu')

@section('isiweb')

<!-- Carosel / Slider-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div align="center">
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/d1.jpg" style="width: 40%; height: 20%;" alt="veleg 1">
    </div>

    <div class="item">
      <img src="img/d2.jpg" style="width: 40%; height: 20%;" alt="veleg 2">
    </div>

    <div class="item">
      <img src="img/d3.jpg" style="width: 40%; height: 20%;"  alt="veleg 3">
    </div>

    <div class="item">
      <img src="img/d4.png" style="width: 40%; height: 20%;"  alt="veleg 3">
      </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 <div class="jumbotron text-center">
  <h1>Selamat Datang Di Klinik 24 Jam</h1>
  <p>Kesehatan anda adalah prioritas kami</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor..</p>
      <p>Ut enim ad..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor..</p>
      <p>Ut enim ad..</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor..</p>
      <p>Ut enim ad..</p>
    </div>
  </div>
</div> 



@endsection