@extends("layouts")

@section("title")
  Rock
@endsection

@section("main")

      <div class="container marketing">
    <div class="jumbotron">
      <div class="container ">

        <div class="row featurette">
          <div class="col-md-9 col-xs-2 order-md-2 ">
            <h1 class="display-3"><strong>Rock</strong></h1>
            <p>En esta pagina podras realizar la compra de los albumes de los mejores artistas con tu cuenta podras agregar el contenido a tu carro de compras</p>

          </div>
              <div class="col-md-3 col-xs-1 order-md-1">
                <img id="logo" class="logo"src="./imagenes/B.jpg" alt="logo">

                  </div>
        </div>

      </div>
    </div>

        <ul>
          @forelse ($rock as $rock)

          @empty

          @endforelse



  <!-- Section: Products v.3 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Nuestros Albumes</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">El disco que desees agregalo en tu carrito previamente logueate</p>

  <!-- Grid row -->




@endsection
