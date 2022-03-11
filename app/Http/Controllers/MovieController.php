<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        //SELECT * FROM MOVIE
        $data=Movie:: all();
        
        dump($data);
        return view('home', compact("data"));
    }
}
