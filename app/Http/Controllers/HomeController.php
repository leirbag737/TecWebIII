<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //return "Retornando do invoke do HomeController";
        return view("home");

    }
}
