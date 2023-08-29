<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSerie()
    {
        $series = [
            "Grey's Anatomy",
            "Lost",
            "Son's of Anarchy"
        ];


        return view('series/index', ['series' => $series]); // chama a view e passa uma variável
        //return view('series/index', compact('series'));
    }

    public function create()
    {
        return view("series.create");
    }
}
