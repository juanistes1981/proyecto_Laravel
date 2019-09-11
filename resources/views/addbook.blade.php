@extends('layouts')
@yield("reg.css")
@section("title")
  Agregar musica
@endsection

@section("main")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    <form method="POST" action="{{ route('book/add') }}"enctype="Multipart/form-data">
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
                            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('precio') }}</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ old('precio') }}" required autocomplete="precio" autofocus>

                                @error('precio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('stock') }}</label>

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
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="image" enctype="multipart/form-data" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('category') }}</label>

                            <div class="col-md-6">
                                <select id="category"  class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required>
                                    @foreach ($categories as $category)
                                      <option value="{{$category->id}}" {{$category->id == old("category")?"selected": ""}}>
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


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
