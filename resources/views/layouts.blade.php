
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("title")
    </title>
    <link rel="stylesheet" href="/css/app.css">

    <!--<link rel="stylesheet" href="/css/categorias.css">-->
    <!--<link rel="stylesheet" href="/css/contacto.css">-->

    <!--<link rel="stylesheet" href="/css/log1.css">-->
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet">
    @yield("css")
    @yield("js")
  </head>
  <body>
    <div class="container">
      <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="/HomeController">Book&Music</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto">

                          <li class="nav-item"><a class="nav-link" href="/book">Book</a></li>
                          <li class="nav-item"><a class="nav-link " href="/music">Music</a></li>
                          <div class="dropdown" id="dropdown" >
                <a class="nav-link" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
                </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2" id="dropmenu">


                            <div class="dropdown-divider" id="divider"></div>
                            <button class="dropdown-item" id="dropitem" type="button"><a href = "/cart">Carrito</a></button>
                            <div class="dropdown-divider" id="divider"></div>
                            <button class="dropdown-item" id="dropitem" type="button"><a href="/contacto">Contacto</a></button>
                            <div class="dropdown-divider" id="divider"></div>
                            <button class="dropdown-item" id="dropitem" type="button"> <a  href="/preguntas">Preguntas Frecuentes</a></button>
                            <div class="dropdown-divider" id="divider"></div>
                            @if (Auth::check())
                            <button class="dropdown-item" id="dropitem" type="button"><a href="/music/add">Add Music</a></button>
                            <div class="dropdown-divider" id="divider"></div>
                            <button class="dropdown-item" id="dropitem" type="button"><a href="/book/add">Add Books</a></button>
                            <div class="dropdown-divider" id="divider"></div>
                            @endif
                          </div>





                    </ul>


                        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
                            @csrf
                            @section("js")
                                <script src="/js/search.js" charset="utf-8"></script>
                                  @endsection
                          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                          <button id="search" class="btn btn-outline-success " type="submit">Search</button>
                        </form>

                        <ul class="auth">
                              @if (Auth::check())
                                <li>Hello {{Auth::user()->name}}</li>

                                <li> <img src="/storage/{{Auth::user()->avatar}}" alt=""></li>

                                <li>
                                    <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                              @else
                              <ul class="nav navbar-nav navbar-right">
                                  <li class="validation"><a href="/register"><span class="glyphicon glyphicon-user"></span>Register</a></li>

                                  <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

                              @endif
                            </ul>
                    </div>
                </nav>
    </header>


      <main>
          @yield("main")
      </main>


      <footer>
        <footer  class="footer" class="page-footer font-small special-color-dark pt-4">

          <!-- Footer Elements -->
          <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                      <li class="list-inline-item">
                            <a href="http://www.facebook.com" class="btn-floating btn-fb mx-1">
                              <img src="./imagenes/iconos/facebook.png" alt="facebook">
                            </a>
                      </li>

                      <li class="list-inline-item">
                            <a href="http://www.twitter.com" class="btn-floating btn-tw mx-1">
                              <img src="./imagenes/iconos/gorjeo.png" alt="twiter">
                            </a>
                      </li>

                      <li class="list-inline-item">
                        <a href="http://www.instagram.com" class="btn-floating btn-gplus mx-1">
                          <img src="./imagenes/iconos/instagram.png" alt="instagram">
                        </a>
                      </li>

                      <li class="list-inline-item">
                        <a href="http://www.linkedin.com" class="btn-floating btn-li mx-1">
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
          <div class="footer-copyright text-center py-3">© 2019 Copyright dh:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Todos los derechos quedan reservados a sus autores y editoriales.</a>
          </div>
          <!-- Copyright -->

        </footer>
      </div>
    </body>
  </html>
