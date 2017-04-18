<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
  /*
  public function index(){
    $movies = DB::table('movies')->get();
    return response()->json($movies);
  }

  public function show($id){
    $movie = DB::table('movies')->find($id);
    return response()->json($movie);
  }
  */

  public function show($id){
    $movie = Movie::find($id);
    $movie->grade = $movie->grade;
    $movie->actors = $movie->actors;
    $movie->rating = $movie->getRating();
    return response()->json($movie);
  }
}
