
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Books
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="/css/libros.css">
     <link rel="stylesheet" href="/css/index.css">
     <link rel="stylesheet" href="/css/book.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fauna+One|Playfair+Display&display=swap" rel="stylesheet">
  </head>
  <body>

      <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Book&Music</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto">


                          <li class=@if(Request::path() == 'home' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif >
                            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class= @if(Request::path() == 'book' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif > <a class="nav-link" href="/book">Book</a></li>
                          <li class= @if(Request::path() == 'music' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif><a class="nav-link " href="/music">Music</a></li>

                          <li class= @if(Request::path() == 'contacto' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif><a class="nav-link " href="/contacto">Contacto</a></li>

                          <li class=@if(Request::path() == 'faq' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif><a class="nav-link " href="/faq">Preguntas</a></li>
                              @if (Auth::check())
                          <li class="@if(Request::path() == 'cart' )
                                "nav-item active"
                                @else
                                  "nav-item"
                            @endif"><a class="nav-link " href="/cart">Carrito</a></li>

                            <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                                                  <?php $total = 0 ?>
                                                  @foreach((array) session('cart') as $id => $details)
                                                      <?php $total += $details['price'] * $details['quantity'] ?>
                                                  @endforeach




                                                    @endif

                          @if (Auth::check())
                            <li><a href="/music/add">Add Music</a></li>

                            <li><a href="/book/add">Add Books</a></li>
                          @endif

                    </ul>
                        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
                            @csrf
                            @section("js")
                                <script src="/js/search.js" charset="utf-8"></script>
                                  @endsection
                          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                          <button id="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
      <div class="container">
        <div id=banner class="jumbotron">


                <div class="row ml-5 mt-4">
                  <div class="col-md-4">
                    <h2  class="title">Novelas</h2>
                <p><a class="btn btn-light ml-5" href="/rock" role="button">Ver!</a></p>
                  </div>
                  <div class="col-md-4">
                    <h2 class="title">Policiales</h2>
        <p><a class="btn btn-light ml-5" href="/pop" role="button">Ver!</a></p>
                  </div>
              <div class="col-md-4">
                <h2 class="title">Infantiles</h2>
                    <a class="btn btn-light ml-5" href="/pop" role="button">Ver!</a></p>
              </div>
                </div>
        </div>

        @forelse ($books as $book)
          <div class="card mb-3" style="max-width: 700px;">
  <div class="row no-gutters">
    <div class="col-md-4">
          <img src="{{$book->avatar}}" alt="" class="card-img" style="height:100%;">
          </div>
          <div class="col-md-8">
      <div class="card-body">
                <p class="base">Titulo:{{$book->titulo}}</p>
                <p class="base">Autor:{{$book->Autor}}</p>
                <p class="base">Precio:${{$book->price}}</p>
                <p class="base">Stock:{{$book->stock}}</p>
                <a href="{{ url('addtocart/'.$book->id) }}">  <button href="{{ url('addtocart/'.$book->id) }}" type="button" class="btn btn-dark">Agregar al carrito</button></a>
                 @if (Auth::check())
                <form class="" action="/book/delete" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$book->id}}">
                  <button type="submit" name="button" class="btn btn-danger">Delete</button>
                </form>
              @endif

</div>
</div>
</div>
</div>



        @empty
          <p>
            No hay musica
          </p>
          <p>
            Probar mas tarde
          </p>
        @endforelse

      {{$book->links}}
</div>

<ul class="footer py-5">
  <div class="d-flex flex-row justify-content-around">
                      <li>
                            <a href="http://www.facebook.com" class="btn-floating btn-fb mx-1">
                              <img src="./imagenes/iconos/facebook.png" alt="facebook">
                            </a>
                      </li>

                      <li>
                            <a href="http://www.twitter.com" class="btn-floating btn-tw mx-1">
                              <img src="./imagenes/iconos/gorjeo.png" alt="twiter">
                            </a>
                      </li>

                      <li >
                        <a href="http://www.instagram.com" class="btn-floating btn-gplus mx-1">
                          <img src="./imagenes/iconos/instagram.png" alt="instagram">
                        </a>
                      </li>

                      <li >
                        <a href="http://www.linkedin.com" class="btn-floating btn-li mx-1">
                          <img src="./imagenes/iconos/linkedin.png" alt="linkedin">
                        </a>
                      </li>

                      <li >
                            <a class="btn-floating btn-dribbble mx-1">
                              <img src="./imagenes/iconos/google-plus.png" alt="google">
                            </a>
                      </li>
</div>
          </ul>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet">
    </body>
    </html>
