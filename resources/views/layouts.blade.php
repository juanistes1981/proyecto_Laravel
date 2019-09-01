<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield("title")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/book.css">
    <link rel="stylesheet" href="/css/categorias.css">
    <link rel="stylesheet" href="/css/contacto.css">
    <link rel="stylesheet" href="/css/music.css">
    <link rel="stylesheet" href="/css/reg.css">
    <link rel="stylesheet" href="/css/log1.css">
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
        <nav>
          <ul class="links">
            <li>
              <a href="/music">Music</a>
            </li>
            <li>
              <a href="/Books">Books</a>
            </li>
            <li>
              <a href="/carrito">carrito</a>
            </li>
            <li>
              <a href="/contacto">contacto</a>
            </li>

            @if (Auth::check())
              <li>
                <a href="/music/add">Add a Music</a>
              </li>
              <li>
                <a href="/Books/add">Add a Books</a>
              </li>
            @endif
          </ul>
          <form class="" action="/search" method="get">
            @csrf
            <input class="form-control" type="text" name="search" value="">
            <button type="submit" class="btn btn-primary" name="button">Search</button>
          </form>

        </nav>
        <nav>
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
            @else
              <li>
                <a href="/register">Register</a>
              </li>
              <li>
                <a href="/login">Login</a>
              </li>
            @endif
          </ul>
        </nav>
      </header>
      <main>
        @yield("main")
      </main>
      <footer>
        Facu-LOLO-IRINA-Juanelo
      </footer>
    </div>
  </body>
</html>
