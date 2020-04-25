<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function directory()
    {
      $actores = Actor::paginate(5);
      $vac = compact('actores');
      return view('actores', $vac);
    }

    public function show($id)
    {
      $actor = Actor::find($id);
      if (isset($actor))
      {
        return view('actor',['actor' => $actor, 'id' => $id]);

      } else {
        return "No se encontro ese actor";
      }
    }

    public function search()
    {
      if ($_POST["name"])
       {
         $nombre = $_POST['name'];
         $actores = Actor::where("first_name", "LIKE", "$nombre")
            ->orderby("id")
            ->get();
         $vac = compact("actores");
            return view('actores', $vac);

      }else
       {
         return "Necesita ingresar un nombre para realizar la consulta.";
      }
    }
    public function nuevoActor()
    {
      return view('nuevoActor');
    }


    public function store(Request $request)
    {
      $this->validate($request, [
        'first_name'=>'required|max:255',
        'last_name'=>'required|max:255|unique:actors',
        'rating'=>'required|numeric|lte:10|gte:1',
      ],[
        'required' => "El campo :attribute es requerido",
        'lte' => "El campo :attribute debe ser menor o igual a 10",
        'gte' => "El campo :atribute debe ser mayor a 1",
        'numeric' => "El campo :attribute debe ser un número",
        'max' => "El campo :attribute no debe exceder los 255 caracteres"
      ]);

      $actores = new Actor([
          'first_name' => $request->input('first_name'),
          'last_name' => $request->input('last_name'),
          'rating' => $request->input('rating')
      ]);
      $actores->save();


      return view('actores', ['actores'=>Actor::all()]);
    }
    public function edit($id)
    {
      $actor = Actor::find($id);
      if (isset($actor))
      {
        $vac = compact('actor');
        return view('actor.edit', $vac);
      }else
      {
        return "No se encontro actor con esa id";
      }

    }

    public function update($id, Request $request)
    {
       $this->validate($request, [
        'first_name'=>'required|max:255',
        'last_name'=>'required|max:255',
        'rating'=>'required|numeric|lte:10|gte:1',
      ],[
        'required' => "El campo :attribute es requerido",
        'lte' => "El campo :attribute debe ser menor o igual a 10",
        'gte' => "El campo :atribute debe ser mayor a 1",
        'numeric' => "El campo :attribute debe ser un número",
        'max' => "El campo :attribute no debe exceder los 255 caracteres"
      ]);
        $actor = Actor::find($id);
        $actor->first_name = $request->input('first_name');
        $actor->last_name = $request->input('last_name');
        $actor->rating = $request->input('rating');
        $actor->save();
        $id = $actor->id;
        return redirect("/actor/$id");
    }
    public function destroy($id)
    {
      $actor = Actor::find($id);
      $actor->delete();
      return redirect("/actores");

    }

}
