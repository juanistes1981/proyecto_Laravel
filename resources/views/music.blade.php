@extends("layouts")

@section("title")

@endsection

@section("main")
  <div id=banner class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4" id="titlemusic">Music</h1>
          </div>
  </div>
  <hr class="featurette-divider">
  <div class="jumbotron">

  <div class="container">

        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading">Amy Winehouse <span class="text-muted">Lioness: Hidden Treasures</span></h2>
            <p class="lead">El álbum es una recopilación de grabaciones de antes del lanzamiento del álbum debut de Winehouse, Frank en 2003, y la música que estaba grabando en el año 2011.</p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="categorias"src="./imagenes/images/AMy.jpg" alt="amywinehouse">
          </div>
        </div>
      </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Live ERA 87'-93'<span class="text-muted">Nuevo Producto</span></h2>
    <p class="lead">Un repertorio que no recoge un único concierto, sino varios desarrollados a lo largo de esos cinco años. Veintidós canciones que van de la voracidad punk rock de los primeros tiempos </p>
  </div>
  <div class="col-md-5">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src=" ./imagenes/images/gunsitos.jpg" width="400" height="280" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
  </div>
  </div>

  <hr class="featurette-divider">

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
              <h2 class="title">Ritmos Latinos</h2>
              <img class="producto"src="./imagenes/catgmusic/latina.jpg" alt="latina">
              <p>Lo mejor de america latina seleccionado para vos</p>
              <p><a class="btn btn-secondary" href="detalleproducto.php" role="button">View details »</a></p>
        </div>

      <div class="col-md-4">
            <h2 class="title">Rock</h2>
            <img class="producto"src="./imagenes/catgmusic/fondorock.jpg" alt="rock">
              <p>“En el rock reconoces algo verdadero, como en todo el arte de verdad. Si es real, normalmente es sencillo, y si es sencillo es verdadero.” -JOHN LENNON</p>
    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
       </div>

       <div class="col-md-4">
              <h2 class="title">Musica Académica</h2>
              <img class="producto"src="./imagenes/catgmusic/fondoclasico.jpg" alt="academica">
              <p> Grandes Compositores de musica academica</p>
               <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
  </div>

  <hr class="featurette-divider">
  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
          <div class="col-md-4">
                <h2 class="title">Electronica</h2>
                <img class="producto"src="./imagenes/catgmusic/electronica.jpg" alt="electronica">
                <p>La música electrónica no es lo opuesto a la calidez humana, es exactamente lo mismo.-Bill Laswell .</p>
                <p><a class="btn btn-secondary" href="detalleproducto.php" role="button">View details »</a></p>
          </div>

        <div class="col-md-4">
              <h2 class="title">Hip Hop & Trap</h2>
              <img class="producto" src="./imagenes/catgmusic/hiphop.jpg" alt="hiphop">
                <p>Critica mi vida cuando la tuya sea un ejemplo.-DuoKie</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
         </div>

         <div class="col-md-4">
                <h2 class="title">Musica Pop</h2>
                <img class="producto" src="./imagenes/catgmusic/pop.png" alt="pop">
                <p>Desde su nacimiento a finales de los años 50 muchas canciones, dentro de este género se han convertido en himnos de una generación.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
      </div>
    </div>
  <hr class="featurette-divider">

  <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="col-md-4">
          <h2 class="title">Reggue &  Ska</h2>
          <img class="producto" src="./imagenes/catgmusic/fondoreggue.jpg" alt="reggue">
          <p>Hoy en día el reggae no solo esta en Jamaica. En América Latina han proliferado notablemente durante los últimos años, brindando a todo el mundo algunas de las más hermosas frases de música reggae</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
         </div>

         <div class="col-md-4">
           <h2 class="title">Jazz & Blues</h2>
           <img class="producto"src="./imagenes/catgmusic/fondojazz.jpg" alt="jazz">
           <p>El jazz rompe barreras y crea oportunidades para la comprensión y la tolerancia mutua</p>
             <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
      </div>
    </div>

  <hr class="featurette-divider">
  <div class="jumbotron">

    <div class="container">

          <div class="row featurette">
            <div class="col-md-8 order-md-2">
              <h2 class="featurette-heading">Madona <span class="text-muted">Celebration</span></h2>
              <p class="lead">La portada de Celebration ha sido creada por el artista de street pop Mr. Brainwash quien ha sido descrito por «echar íconos culturales contemporáneos en una batidora y acelerarlos hasta el máximo».
              Celebration es el cuarto álbum recopilatorio de la cantante estadounidense Madonna, publicado el 18 de septiembre de 2009 por la compañía discográfica Warner Bros. Records.</p>
            </div>
            <div class="col-md-4 order-md-1">
              <img class="categorias"src="./imagenes/images/Madon.jpg" alt="madona">
            </div>
          </div>
        </div>
  </div>
@endsection
