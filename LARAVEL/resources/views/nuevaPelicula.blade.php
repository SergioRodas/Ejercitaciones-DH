@extends('layout.default')
@section('title','Agregar Pelicula')
@section('content')

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
  @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
  @endforeach
      </ul>
    </div>
  @endif
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
          @csrf
            <div>
                <label for="titulo">Title</label>
                <input type="text" name="title" value="{{!$errors->has('title')?old('title'):""}}" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="number" name="rating" value="{{!$errors->has('rating')?old('rating'):""}}" id="rating"/>
            </div>
            <div>
                <label for="premios">Awards</label>
                <input type="number" name="awards" value="{{!$errors->has('awards')?old('awards'):""}}" id="premios"/>
            </div>
            <div>
                <label for="duracion">Length</label>
                <input type="number" name="length" value="{{!$errors->has('awards')?old('awards'):""}}" id="duracion"/>
            </div>

            <div>
                <label>Fecha de Estreno</label>
                <select name="day">
                    <option value="">Day</option>
                    @for ($i=1; $i < 32; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor

                </select>
                <select name="month">
                    <option value="">Month</option>
                    @for ($i=1; $i < 13; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <select name="year">
                    <option value="">Year</option>
                    @for ($i=1900; $i < 2017; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>

            <div>
              <label>Género</label>
              <select name="genre">
                @foreach ($generos as $genero)
                    <option value="{{$genero->name}}" >{{$genero->name}}</option>
                @endforeach
              </select>
            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
@endsection
