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


                    </ul>
                    <ul>
                      @if (Auth::check())
                        <li><a href="/music/add">Add a Music</a></li>

                        <li><a href="/book/add">Add a Books</a></li>
                      @endif

                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="/search" method="get">
                        @csrf
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      <button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <ul>
                        @if (Auth::check())
                          <li>
                            Hello {{Auth::user()->name}}!

                          </li>
                            <img src="/storage/{{Auth::user()->avatar}}" alt="">
                          <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                      </ul>
                      @else
                      <ul class="nav navbar-nav navbar-right">
                          <li class="validation"><a href="/register"><span class="glyphicon glyphicon-user"></span>Register</a></li>

                          <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

                      @endif
                    </ul>
                  </div>
      </nav>
</html>
