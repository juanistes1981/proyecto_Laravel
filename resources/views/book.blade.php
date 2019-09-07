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
    @forelse ($books as $books)
      <li>
        <a href="/book/{{$books->id}}">
            <li class="base"> {{$books->titulo}}</li>
            <li class="base"> {{$books->autor}}</li>
            <li class="base"> {{$books->price}}</li>
            <li class="base"> {{$books->stock}}</li>
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
    {{$books->links}}
  @endsection
