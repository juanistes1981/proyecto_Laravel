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
    @forelse ($books as $book)
      <li>
<<<<<<< HEAD
        <a href="/search/{{$books->id}}">
            <li class="base">titulo:{{$books->titulo}}</li>
            <li class="base"> {{$books->avatar}}</li>
=======
>>>>>>> 98015a4ebc635476c73176da739fecce546af822

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
                  <button href="{{ url('addtocart/'.$book->id) }}" type="button" class="btn btn-dark">Agregar al carrito</button>
        </a>
      </li>
    @empty
      <p>
        No hay libros
      </p>

    @endforelse



    @forelse ($musics as $music)
      <div class="card mb-3" style="max-width: 700px;">
    <div class="row no-gutters">
    <div class="col-md-4">
    <img src="{{$music->avatar}}" alt="" class="card-img" style="height:100%;">
    </div>
    <div class="col-md-8">
    <div class="card-body">
          <p class="base"><a href="/music/{{$music->id}}">Titulo:{{$music->titulo}} </a> </p>
          <p class="base">Autor:{{$music->autor}}</p>
          <p class="base">Precio:${{$music->price}}</p>
          <p class="base">Stock:{{$music->stock}}</p>
          <button href="{{ url('addtocart/'.$music->id) }}" type="button" class="btn btn-dark">Agregar al carrito</button>
        </div>
        </div>
        </div>
        </div>
    @empty
      <p>
        No hay musica
      </p>

    @endforelse
  </ul>

  @endsection
