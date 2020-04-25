@extends('../layout.default')
@section('content')
  <h2 style="text-align:center; margin-top:50px">Editar actores</h2>
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
  @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
  @endforeach
      </ul>
    </div>
  @endif
  <form id="agregarActor" name="agregarActor" method="POST" action="/actor/{{$actor->id}}">
    @method('put')
    @csrf
      <div style="text-align:center; margin-top:20px">
          <label for="first_name">Nombre</label>
          <input type="text" name="first_name" value="{{$actor->first_name}}" id="titulo"/>
      </div>
      <div style="text-align:center; margin-top:20px">
          <label for="last_name">Apellido</label>
          <input type="text" name="last_name" value="{{$actor->last_name}}" id="rating"/>
      </div>
      <div style="text-align:center; margin-top:20px">
          <label for="rating">Rating</label>
          <input type="number" name="rating" value="{{$actor->rating}}" id="premios"/>
      </div>
      <div style="text-align:center; margin-top:20px">
      <input type="submit" value="Editar Actor" name="submit"/>
    </div>
  </form>
@endsection
