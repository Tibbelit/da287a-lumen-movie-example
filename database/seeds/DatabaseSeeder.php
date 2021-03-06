<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ActorsTableSeeder::class);
      $this->call(MoviesTableSeeder::class);
      $this->call(GradesTableSeeder::class);
      $this->call(ActorMovieTableSeeder::class);
    }
}
