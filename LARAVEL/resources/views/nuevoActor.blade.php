@extends('layout.default')
@section('title','Agregar Actor')
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
        <form id="agregarActor" name="agregarActor" method="POST">
          @csrf
            <div>
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" value="{{!$errors->has('first_name')?old('first_name'):""}}" id="titulo"/>
            </div>
            <div>
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" value="{{!$errors->has('last_name')?old('last_name'):""}}" id="rating"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="number" name="rating" value="{{!$errors->has('rating')?old('rating'):""}}" id="premios"/>
            </div>
            <div>
            <input type="submit" value="Agregar Actor" name="submit"/>
        </form>
@endsection
