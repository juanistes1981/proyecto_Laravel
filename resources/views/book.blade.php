
<?php
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/book.css">
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

<!-- banner -->
    <div id=banner class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4" id="titlebook">Book</h1>
            </div>
    </div>


        <div class="jumbotron">

          <div class="container">

                <div class="row featurette">
                  <div class="col-md-8 order-md-2">
                    <h2 class="featurette-heading">Autoayuda <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Las herramientas y la motivacion que necesitas para lograr todo lo que te propongas</p>
                  </div>
                  <div class="col-md-4 order-md-1">
                    <img class="categorias"src="./imagenes/categorias/fondoautoayuda.jpg" alt="juvenil">
                  </div>
                </div>
              </div>
        </div>

<hr id="autoayuda"class="featurette-divider">
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
              <h2 class="title">El poder de ahora</h2>
              <img class="producto" src="./imagenes/autoayuda/ahora.jpg" alt="ahora">
              <p>El poder del ahora es un libro único. Tiene la capacidad de crear una experiencia en los lectores y de cambiar su vida.</p>
              <p><a class="btn btn-secondary" href="detalleproducto.php" role="button">View details »</a></p>
        </div>

      <div class="col-md-4">
            <h2 class="title">Padre Rico, Padre Pobre</h2>
            <img class="producto" src="./imagenes/autoayuda/rico.jpg" alt="rico">
              <p>Evoca el concepto de libertad financiera a través de la inversión, los inmuebles, ser dueño de negocios y el uso de tácticas de protección financiera</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
       </div>

       <div class="col-md-4">
              <h2 class="title">Gente toxica</h2>
              <img class="producto" src="./imagenes/autoayuda/toxico.png" alt="gentetoxica">
              <p>En nuestra vida cotidiana no podemos evitar encontrarnos con personas problemáticas.¿Cómo librarme de personas tóxicas?</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>
  </div>
    <hr id="terror">
      <!-- START THE FEATURETTES -->
      <div   class="row featurette">
              <div class="col-md-8" >
                <h2 class="featurette-heading">Terror & Suspenso <span class="text-muted">No podras dejar de leerlo.</span></h2>
                <p class="lead">Cierra las puertas.. enciende las luces..comienza a temblar.. descubre el verdadero terror y el miedo lee estos libros.</p>
              </div>
              <div class="col-md-4 ">
                <img class="categorias"src="./imagenes/categorias/fondosuspenso.jpg" alt="suspenso">
              </div>
      </div>

        <hr class="featurette-divider">

        <div class="container">
            <!--  row of columns -->
            <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h2 class="titlebook">EL resplandor</h2>
                        <img class="producto" src="./imagenes/terror/resplandor.jpg" alt="resplandor">
                        <p>Otra historia aterradora de Stephen King pero No lo olvides..<i>"REDRUM"</i></p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h2 class="titlebook">Dracula</h2>
                        <img class="producto" src="./imagenes/terror/dracula.jpg" alt="dracula">
                        <p>Jonathan Harker viaja para cerrar un negocio inmobiliario en la misteriosa Transilvania, su cliente es el magnetico conde Dracula</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                      <h2 class="titlebook">El Monje</h2>
                      <img class="producto" src="./imagenes/terror/monje.jpg" alt="monje">
                      <p>Ambrosio está envenenado por el orgullo y pronto descubrirá que la lujuria forma parte de sus pecados capitales. </p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div>
            </div>
          </div>

      <hr class="featurette-divider">
      <div class="jumbotron">

        <div id= "viajes"class="container">

              <div class="row featurette">
                <div class="col-md-8 order-md-2">
                  <h2 class="featurette-heading">Viajes <span class="text-muted">Los mejores destinos</span></h2>
                  <p class="lead">Para convertir a tu viaje en una experiencia extraordinaria cuenta con la ayuda de estos libros para elegir los mejores restaurantes, lugares etc..</p>
                  </div>
                <div class="col-md-4 order-md-1">
                  <img class="categorias"src="./imagenes/categorias/fondoviajes.jpg" alt="viajes">
                </div>
              </div>
            </div>
      </div>

    <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2>Amsterdam</h2>
                <img class="producto" src="./imagenes/viajes/amsterdam.jpg" alt="amsterdam">
                <p>El centro de Ámsterdam está surcado de canales y callejuelas en las que uno nunca sabe qué va a encontrar</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2>Egipto</h2>
                  <img class="producto" src="./imagenes/viajes/egipto.jpg" alt="egipto">
                  <p>Egipto recibe al viajero con magníficos monumentos, su cautivador desierto y su frondoso delta, un gran pasado y su gente, acogedora y amante de las historias.</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


               <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2>Londres</h2>
                  <img class="producto" src="./imagenes/viajes/londres.jpg" alt="londres">
                      <p>Experiencias únicas, como disfrutar de un concierto en la Iglesia de Wren, tomarse una pinta en un pub histórico, asistir a un auténtico partido de polo o navegar en barca por el Támesis.</p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                      <h2>Nueva York</h2>
                      <img class="producto" src="./imagenes/viajes/nueva.jpg" alt="jazz">
                      <p>Epicentro de las artes, capital gastronómica y comercial, ciudad que marca tendencias</p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Paris</h2>
                    <img class="producto" src="./imagenes/viajes/paris.jpg" alt="jazz">

                    <p>La ciudad de las luces famosa por sus bulevares flanqueados de monumentos, museos repletos de tesoros, bistrós clásicos y casas de alta costura</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Roma</h2>
                    <img class="producto" src="./imagenes/viajes/roma.jpg" alt="jazz">
                    <p>Roma, una superpotencia de la Antigüedad convertida en metrópolis moderna, es una mezcla fascinante de ruinas, monumentos y obras de arte impresionantes.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div>

              </div>


          </div>
      <hr class="featurette-divider">
      <div class="jumbotron">

        <div id="infantil"class="container">

              <div class="row featurette">
                <div class="col-md-8 order-md-2">
                  <h2 class="featurette-heading">Infantiles <span class="text-muted">Un mundo de aventuras</span></h2>
                  <p class="lead">Un sin fin de historias y aventuras que te encantaran</p>
                </div>
                <div class="col-md-4 order-md-1">
                  <img class="categorias"src="./imagenes/categorias/fondoinfantil.jpg" alt="infantil">
                </div>
              </div>
            </div>
      </div>

<hr class="featurette-divider">
        <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="titlebook">El Principito</h2>
                  <img class="producto" src="./imagenes/infantil/principito.jpg" alt="principito">
                  <p>Un dia descubrí a un Príncipe y su rosa..y vivi mil historias</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2>La tierra de los mounstros</h2>
                  <img class="producto" src="./imagenes/infantil/tierra.jpg" alt="mounstros">
                  <p>Alex ve que se habitación se ha convertido en una tierra de mounstros</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2>Narnia</h2>
                <img class="producto" src="./imagenes/infantil/narnia.jpg" alt="jazz">
                      <p>Experiencias únicas, como disfrutar de un concierto en la Iglesia de Wren, tomarse una pinta en un pub histórico, asistir a un auténtico partido de polo o navegar en barca por el Támesis.</p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>



            </div>

            <hr>

          </div>
<hr class="featurette-divider">
<div class="jumbotron">

  <div id= "novelas"class="container">

        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading">Novelas <span class="text-muted">  Historias apasionantes</span></h2>
            <p class="lead">Historias de amor, engañó, traición.. de todas las épocas.. que no podras dejar de leer .</p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="categorias"src="./imagenes/fondonovelas.jpg" alt="novelas">
          </div>
        </div>
      </div>
</div>
<div class="container marketing">

        <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2>Orgullo y Prejuicio </h2>
                <img class="producto" src="./imagenes/novelas/orgullo.jpg" alt="orgullo">
                <p>Publicada por primera vez el 28 de enero de 1813 como una obra anónima, es la más famosa de las novelas de Jane Austen y una de las primeras comedias románticas en la historia de la novela.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2> El grito de la Tierra</h2>
                <img class="producto" src="./imagenes/novelas/grito.jpg" alt="grito">
                <p> La infancia de Gloria termina abruptamente cuando es enviada junto con su prima Lilian a un colegio en Gran Bretaña. Regresa convertida en una mujer mucho más fuerte</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2>Yo después de Ti </h2>
                <img class="producto" src="./imagenes/novelas/jojo.jpg" alt="despuesdeti">
                <p>¿Qué decidirías cuando hacer feliz a la persona a la que amas significa también destrozarte el corazón?</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <!-- <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>El amante Japones</h2>
                    <img class="producto" src="./imagenes/novelas/amante.jpg" alt="jazz">
                    <p>La historia de amor entre la joven Alma Belasco y el jardinero japonés Ichimei conduce al lector por un recorrido a través de diversos escenarios </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2>Matar a un Ruiseñor</h2>
                  <img class="producto" src="./imagenes/novelas/matar.jpg" alt="jazz">
                  <p>Matar un ruiseñor es una novela de 1960 de la escritora estadounidense Harper Lee.</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>
            </div> -->

          </div>

<hr class="featurette-divider">
<div class="jumbotron">

  <div id= "ficcion"class="container">

        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading">Ficcion  <span class="text-muted"> Mundos Alucionantes</span></h2>
            <p class="lead">Historias de amor, engañó, traición.. de todas las épocas.. que no podras dejar de leer .</p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="categorias"src="./imagenes/fondoficcion1.jpg" alt="ficcion">
          </div>
        </div>
      </div>
</div>
<div class="container marketing">

        <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="title">Fahrenheit 451 </h2>
                <img class="producto" src="./imagenes/ficcion/451.jpg" alt="451">
                <p> El fuego tarde... pero los bomberos no están para apagarlo sino para encenderlo</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="title"> 1984</h2>
                <img class="producto" src="./imagenes/ficcion/año.jpg" alt="1984">
                <p>Cuidado con lo que haces.. el Gran hermano esta mirando.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                      <h2 class="title">La guerra de los mundos</h2>
                      <img class="producto" src="./imagenes/ficcion/guerra.jpg" alt="guerra">
                      <p> A despues de un siglo de su publicación y varias adaptaciones cinematográficas  la novela de Wells sigue siendo una de las más elegidas </p>

                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4">
                   <h2 class="title">Crónicas marcianas</h2>
                    <img class="producto" src="./imagenes/ficcion/cronicas.jpg" alt="jazz">
                    <p> Bradbury se sumerge en los misterios del alma y desarrolla una de las hazañas más apasionantes de la humanidad </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="title">Viaje al centro de la Tierra</h2>
                  <img class="producto" src="./imagenes/ficcion/verne.jpg" alt="jazz">
                  <p>El profesor descubre una pista de un pasadizo que lo llevará al centro de la tierra </p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="title">La tercer ola</h2>
                  <img class="producto" src="./imagenes/ficcion/ola.jpg" alt="ola">
                  <p> La historia humana no ha llegado a su conclusión sino lo que ha hecho es esperar.</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


            </div>

            <hr>

          </div>

<hr class="featurette-divider">

<div class="jumbotron">

  <div id="ciencia" class="container">

        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading">Ciencia  <span class="text-muted">  Material de Estudio</span></h2>
            <p class="lead">Medicina, Historia, Economía, Geografia</p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="categorias"src="./imagenes/categorias/fondociencias.jpg" alt="ciencias">
          </div>
        </div>
      </div>
</div>
<hr>
<hr class="featurette-divider">

<div class="container">
    <!--  row of columns -->
    <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="titlebookciencias">Microbiología Médica</h2>
                <img class="prociencias" src="./imagenes/ciencias/microbiologia.jpg" alt="resplandor">
                <p>Otra historia aterradora de Stephen King pero No lo olvides..<i>"REDRUM"</i></p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="titlebookciencias">La riqueza de las naciones</h2>
                <img class="prociencias" src="./imagenes/ciencias/riqueza.jpg" alt="dracula">
                <p>Una obra clave de la economía moderna</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <h2 class="titlebookciencias">Anatomía y fisiologia humana</h2>
              <img class="prociencias" src="./imagenes/ciencias/anatomia.jpg" alt="monje">
              <p>Un texto de referencia en las diplomaturas en ciencias de la salud</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
    </div>
  </div>

<hr class="featurette-divider">

<hr class="featurette-divider">
    <div id="policial" class="container">
                <div class="row featurette">
                  <div class="col-md-7">
                    <h2 class="featurette-heading">Policial<span class="text-muted">  Los maestros del crimen</span></h2>
                    <p class="lead"> Sherlock Holmes.. Poirot... misterios sin resolver </p>
                  </div>
                  <div class="col-md-5">
                  <img class="categorias"src="./imagenes/categorias/fondopolicial.jpg" alt="juvenil">
                  </div>
                </div>
                <hr>
     </div>


          <div class="container marketing">

                  <div class="container">
                      <!--  row of columns -->
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                          <h2 class="title">La Chica del Tren </h2>
                          <img class="producto" src="./imagenes/policiales/tren.jpg" alt="ahora">
                          <p>Viste algo sospechoso.. Rachel si. </p>
                 <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                          <h2 class="title"> Asesinato en el Orient Express </h2>
                          <img class="producto" src="./imagenes/policiales/orient.jpg" alt="orient">
                          <p> Una víctima, doce sospechosos, y una mente privilegiada en búsqueda de la verdad </p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>
                  <div class="col-xs-12 col-sm-6 col-md-4">
                          <h2 class="title">Sherlock Holmes</h2>
                          <img class="producto" src="./imagenes/policiales/dect.jpg" alt="HOLMES">
                                <p> Un libro que reúne las cuatro novelas de Sherlock Holmes , el emblemático detective </p>
                                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                              <h2 class="title">La casa torcida</h2>
                              <img class="producto" src="./imagenes/policiales/casa.jpg" alt="casa">
                              <p>Tres generaciones del multimillonario Leonides en conviven bajo el mismo techo en una mansion inclinada </p>
                              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>
                      <div class="col-xs-12 col-sm-6 col-md-4">
                            <h2 class="title">Telon</h2>
                            <img class="producto" src="./imagenes/policiales/telon.jpg" alt="TELON">
                            <p>Poirot ha vuelto a Styles porque pretende localizar a ese asesino, Poirot se da perfecta cuenta de que es su último caso y el que considera más interesante de todos también.</p>
                            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                              <h2 class="titlebookciencias">Los mejores cuentos policiales</h2>
                              <img class="producto" src="./imagenes/policiales/cuentos.jpg" alt="CUENTOS">
                              <p>Las mejores piezas del género, publicados en dos volúmenes sucesivos, constituyen un auténtico banquete</p>
                              <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                          </div>
                      </div>
                  </div>

                      <hr>

  <hr class="featurette-divider">
<div class="container marketing">
  <div id="cocina"class="container">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"> Cocina<span class="text-muted">  Descubrí los mejores sabores</span></h2>
          <p class="lead">Llevate Los mejores chef a tu cocina y disfruta de las mejores recetas de todo el mundo</p>
        </div>
            <div class="col-md-5 order-md-1">
                <img class="categorias"src="./imagenes/categorias/fondococina.jpg" alt="cocina">
            </div>
      </div>
  </div>
      <hr>
      <div class="container marketing">

        <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="titlebookciencias">La cocina de Coco</h2>
              <img class="prociencias" src="./imagenes/cocina/coco.jpg" alt="coco">
               <p> <i>"Mi pasión por la cocina esta puesta en cada pagina.. Te invito a mi cocina</i></p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="titlebookciencias">Pastelería Casera sin gluten</h2>
                <img class="prociencias" src="./imagenes/cocina/dolly.jpg" alt="pasteleria">
                 <p> Desde panes hasta postres,una gran variedad de recetas para celíacos </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="titlebookciencias">La cocina y los alimentos</h2>
                <img class="prociencias" src="./imagenes/cocina/alimentos.jpg" alt="jazz">
                      <p>Una guia completa para los amantes de la gastronomia de rodo el mundo</p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2 class="titlebookciencias"> El arte de la cocina francesa Vol.2</h2>
                    <img class="prociencias" src="./imagenes/cocina/julia.jpg" alt="jazz">
                    <p> De la mano de Julia aprende a cocinar y disfrutar las mejores rectas</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="titlebookciencias">El Atlas comestible</h2>
                  <img class="prociencias" src="./imagenes/cocina/atlascomestible.jpg" alt="jazz">

                  <p> Una vuelta a el mundo a través de la gastronomía </p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="titlebookciencias">Como ser un Masterchef</h2>
                  <img class="prociencias" src="./imagenes/cocina/chef.jpg" alt="masterchef">
                  <p>El mejor manual de técnicas para aquel que se inicia en la pasión cocina como un profesional</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


            </div>

            <hr>

          </div>

</div>
 <hr class="featurette-divider">


 <div class="jumbotron">

   <div id="juvenil"class="container">

         <div class="row featurette">
           <div class="col-md-8 order-md-2">
             <h2 class="featurette-heading">Juveniles  <span class="text-muted">All for you!</span></h2>
             <p class="lead">Los best seller de los últimos tiempos ..Ángeles caídos, cazadores de sombras, divergentes.. todo todo.. que estas esperando</p>
           </div>
           <div class="col-md-4 order-md-1">
             <img class="categorias"src="./imagenes/categorias/fondojuvenil1.jpg" alt="juvenil">
           </div>
         </div>
       </div>
 </div>
 <hr>


        <div class="container">
            <!--  row of columns -->
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="title">Divergente</h2>
              <img class="producto" src="./imagenes/juveniles/divergente.jpg" alt="rico">
               <p> Beatrice tiene que elegir entre su familia o ser quien debe ser pero no puede quedarse con las dos cosas </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="title">Bajo la misma estrella</h2>
                <img class="producto" src="./imagenes/juveniles/estrella.jpg" alt="rico">
                 <p> Una novela teñida de humor y tragedia que habla sobre la capacidad de soñar aun en momentos dificiles</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2 class="title"> Cazadores de sombras</h2>
                    <img class="producto" src="./imagenes/juveniles/cazadores.jpg" alt="cazadores">
                    <p> En el Pandemonium Claros uno su destino al de tres cazadores de sombras</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-4">
                <h2 class="title">Hush hush</h2>
                <img class="producto" src="./imagenes/juveniles/hush.jpg" alt="jazz">
                  <p>Un juramento sagrado..Un ángel caido.. un amor prohibido </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="title">Todo Todo</h2>
                  <img class="producto" src="./imagenes/juveniles/todo.jpg" alt="todo">

                 <p> Una novela sobre la emocion y la angustia que supone abrir nuestro corazón a otra persona</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>
           <div class="col-xs-12 col-sm-6 col-md-4">
                  <h2 class="title">La Ladrona de libros</h2>
                  <img class="producto" src="./imagenes/juveniles/ladrona.jpg" alt="masterchef">
                  <p>Las aventuras de una niña dada en adopcion hasta el fin de la 2da Guerra mundial </p>
                 <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
              </div>
          </div>

      <hr class="featurette-divider">
    </div>
  </div>
</div>
</div>
</div>
</div>

    <!-- /END THE FEATURETTES -->
<!-- Footer -->
<footer  class="footer" class="page-footer font-small special-color-dark pt-4">

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

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Todos los derechos quedan reservados a sus autores y editoriales.</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
