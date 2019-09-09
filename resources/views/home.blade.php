@extends("layouts")

@section("title")
  Home
@endsection



@section("main")
  <section class="carousel">

    <div class="container mt-3" class="col-md-12 ">


      <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>

    </ul>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./imagenes/carrousel/1.jpg" class="d-block w-100"alt="pricipal" width="1100" height="500">
      </div>

      <div class="carousel-item">
          <img src="./imagenes/carrousel/2.jpg" class="d-block w-100"alt="pop" width="1100" height="500">

      </div>


      <div class="carousel-item">
            <img src="./imagenes/carrousel/3.jpg" class="d-block w-100"alt="folk" width="1100" height="500">

      </div>
      <div class="carousel-item">
          <img src="./imagenes/carrousel/4.jpg" class="d-block w-100"alt="novelas" width="1100" height="500">

      </div>


      <div class="carousel-item">
      <img src="./imagenes/carrousel/5.jpg" class="d-block w-100"alt="conect" width="1100" height="500">

      </div>


      <div class="carousel-item">
              <img src="./imagenes/carrousel/6.jpg" class="d-block w-100"alt="conect" width="1100" height="500">

      </div>



      <div class="carousel-item">
              <img src="./imagenes/carrousel/7.jpg" class="d-block w-100"alt="conect" width="1100" height="500">

      </div> -->

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  </div>

  </section>

@endsection
