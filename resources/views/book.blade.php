@extends("layouts")
  @yield("book.css")
@section("title")
  Books
@endsection

@section("main")
    <div id=banner class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4" id="titlemusic">Book</h1>
              <h2 class="title">Novelas</h2>
          <p><a class="btn btn-secondary" href="/rock" role="button">Novelas »</a></p>
              <h2 class="title">Policiales</h2>
                  <p><a class="btn btn-secondary" href="/pop" role="button">Policiales »</a></p>
              <h2 class="title">Infantiles</h2>
                  <p><a class="btn btn-secondary" href="/pop" role="button">Infantiles »</a></p>

            </div>
    </div>


  <ul>
    @forelse ($books as $book)
      <li>
        <a href="/book/{{$book->id}}">
            <li class="base">titulo:{{$book->titulo}}</li>
            <li class="base">Autor:{{$book->Autor}}</li>
            <li class="base">Precio:${{$book->price}}</li>
            <li class="base">Stock:{{$book->stock}}</li>
            <li class="base"><img src="{{$book->avatar}}" alt=""> </li>
            <button id="button" href="/addToCart" type="submit">Añadir</button>
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
    {{$book->links}}
  @endsection
