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
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Book&Music</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="book.php">Book</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="music.php">Music</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="register.php">Register</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="contacto.php">Contacto</a>
                          <a class="dropdown-item" href="faq.php">Preguntas Fecuentes</a>
                          <a class="dropdown-item" href="carrito.php">Carrito de Compras</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias libros</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="/book.php/#autoayuda">Autoayuda</a>
                          <a class="dropdown-item" href="#terror">Terror&Suspenso</a>
                          <a class="dropdown-item" href="#viajes">Viajes</a>
                          <a class="dropdown-item" href="#infantil">Infantil</a>
                          <a class="dropdown-item" href="#novelas">Novelas</a>
                          <a class="dropdown-item" href="#ficcion">Ficción</a>
                          <a class="dropdown-item" href="#ciencia">Ciencias</a>
                          <a class="dropdown-item" href="#policial">Policial</a>
                          <a class="dropdown-item" href="#cocina">Cocina</a>
                          <a class="dropdown-item" href="#juvenil">Juvenil</a>
                        </div>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="post">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      <button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
      </nav>
</html>
