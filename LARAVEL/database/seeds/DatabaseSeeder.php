<?php

use Illuminate\Database\Seeder;
use App\Director;
use App\Movie;
use App\Actor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $directors = factory(Director::class)->times(10)->create();

      foreach ($directors as $director) {
          // Creo las 5 películas por director:
        $movies = factory(Movie::class, 5)->create(
            [
              'director_id' => $director->id,
            ]
          );
      }

      $actors = factory(Actor::class)->times(50)->create();
      foreach ($movies as $movie) {
          $movie->actors()->sync($actors->random(3));
      }

    }
}
