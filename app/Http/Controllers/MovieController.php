<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;

class MovieController extends Controller
{
    public function MovieControllerFunction(){
        return view('MovieView');
    }
}
