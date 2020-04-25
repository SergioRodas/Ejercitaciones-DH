<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function ()
{
    return view('welcome');
});
Route::get('/miPrimeraRuta', function()
{
  return 'Creé mi primer ruta en Laravel';
});
/*Route::get('/{nombre}/{apellido?}', function ($nombre, $apellido = null)
 {
   if ($apellido !== null)
 {
        return 'Hola ' . $nombre . ' ' . $apellido;
 } else
  {
        return 'Hola ' . $nombre;
  }
});*/

Route::get('/resultado/{numero}/{opcional?}', function($numero, $opcional = null)
{
  if ($opcional !== null) {
    return "$numero x $opcional es igual a " . $numero * $opcional;
  }else
  {  if ($numero%2==0)
  {
     return "El número $numero  es par";} //escribo Par
  else //Sino
  { return "El número $numero es impar"; } //Escribo impar
}


});
Route::get('/peliculas', 'PeliculasController@listado');
Route::get('/peliculas/{id}','PeliculasController@buscarPeliculaId');
Route::get('/peliculas/buscar/{nombre}','PeliculasController@buscarPeliculaNombre');

Route::get('/actores', 'ActorController@directory');
Route::get('/agregarPelicula', 'PeliculasController@nuevaPelicula');
Route::post('/agregarPelicula', 'PeliculasController@agregarPelicula');
Route::get('/actor/{id}', 'ActorController@show');
Route::post('/actores/buscar/', 'ActorController@search');
Route::get('/actores/create', 'ActorController@nuevoActor');
Route::post('/actores/create', 'ActorController@store');
Route::get('/actores/store', 'ActorController@nuevoActor');
Route::post('/actores/store', 'ActorController@store');
Route::get('/actor/{id}/edit', 'ActorController@edit');
Route::put('/actor/{id}', 'ActorController@update');
Route::delete('/actor/{id}', 'ActorController@destroy');
Route::get('/genre/{id}', 'GenreController@show');
Route::get('/genres', 'GenreController@listado');
Route::get('/movie/{id}', 'PeliculasController@show');
Route::get('/pelicula/{id}', 'PeliculasController@showActors');
Route::get('/imagen', 'ImagenController@subirImagen');
Route::post('/imagen', 'ImagenController@storage');
