<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function MovieControllerFunction(){

        $myMovies = Movie::all();
        dd($myMovies);
        
        return view('MovieView', $myMovies);
    }
}
