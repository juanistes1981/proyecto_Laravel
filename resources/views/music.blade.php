<?php
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/music.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet">

    <title></title>
  </head>
  <body>
    <header>
      <?php
      include("navBar.php");
      ?>

    </header>
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


    <!-- /END THE FEATURETTES -->




  <!-- FOOTER -->
  <footer class="container">
    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <img src="./imagenes/iconos/facebook.png" alt="facebook">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <img src="./imagenes/iconos/gorjeo.png" alt="twiter">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <img src="./imagenes/iconos/instagram.png" alt="instagram">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <img src="./imagenes/iconos/linkedin.png" alt="linkedin">
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <img src="./imagenes/iconos/google-plus.png" alt="google">
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
