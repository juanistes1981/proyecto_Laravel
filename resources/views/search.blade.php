@extends("layouts")
  @yield("book.css")
@section("title")
  Buscador
@endsection

@section("main")
    <div id=banner class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4" id="titlemusic">Resultados de la Busqueda de {{$search}}</h1>


            </div>
    </div>


  <ul>
    @forelse ($books as $books)
      <li>
        <a href="/search/{{$books->id}}">
            <li class="base">titulo:{{$books->titulo}}</li>
            <li class="base"> {{$books->avatar}}</li>

        </a>
      </li>
    @empty
      <p>
        No hay musica
      </p>
      <p>
        Probar mas tarde
      </p>
    @endforelse
  </ul>

  @endsection
