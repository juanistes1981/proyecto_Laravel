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
    @forelse ($musics as $musicss)
      <li>
        <a href="/book/{{$musics->id}}">
            <li class="base">titulo:{{$musics->titulo}}</li>
            <li class="base"> {{$musics->avatar}}</li>

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
