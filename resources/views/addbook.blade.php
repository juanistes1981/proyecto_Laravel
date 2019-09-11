@extends('layouts')
@yield("reg.css")
@section("title")
  Agregar Libros
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Añadir nuevo producto</h1>
  </div>

  <form method="POST" action="/music/add" enctype="Multipart/form-data">
      @csrf

      <div class="form-group row">
          <label for="titulo" class="col-md-4 col-form-label text-md-right">{{ __('titulo') }}</label>

          <div class="col-md-6">
              <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>

              @error('titulo')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
          <label for="autor" class="col-md-4 col-form-label text-md-right">{{ __('autor') }}</label>

          <div class="col-md-6">
              <input id="autor" type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" value="{{ old('autor') }}" required autocomplete="autor" autofocus>

              @error('autor')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

          <div class="col-md-6">
              <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

              @error('price')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

          <div class="col-md-6">
              <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

              @error('stock')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('category') }}</label>

          <div class="col-md-6">
              <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" required>
                @foreach ($category as $category)
                  <option value="{{$category->id}}" {{$category->id == old("category") ? "selected" : ""}}>
                    {{$category->name}}
                  </option>
                @endforeach

              </select>
              @error('category')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
          <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('avatar') }}</label>

          <div class="col-md-6">
              <input id="avatar" type="file" enctype="multipart/form-data" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>

              @error('avatar')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>




      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Submit') }}
              </button>
          </div>
      </div>
  </form>
@endsection
