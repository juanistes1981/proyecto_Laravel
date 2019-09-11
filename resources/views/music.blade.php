@extends("layouts")
  @yield("music.css")
@section("title")
  Music
@endsection

@section("main")
  <div id=banner class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4" id="titlemusic">Music</h1>
            <h2 class="title">Rock</h2>
        <p><a class="btn btn-secondary" href="/rock" role="button">Rock Music »</a></p>
            <h2 class="title">Pop</h2>
                <p><a class="btn btn-secondary" href="/pop" role="button">POP Music »</a></p>

          </div>
  </div>

  <h1> Todos nuestros titulos</h1>
<ul>
  @forelse ($music as $music)
    <li>
      <a href="/music/{{$music->id}}">
        <li class="base">titulo:{{$music->titulo}}  </li>
        <li class="base">Autor:{{$music->autor}}</li>
        <li class="base">Precio:${{$music->price}}</li>
        <li class="base">Stock:{{$music->stock}}</li>
        <li class="base"><img src="{{$music->avatar}}" alt=""></li>
        <p class="btn-holder"><a href="{{ url('addtocart/'.$music->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
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
  {{$music->links}}
@endsection
