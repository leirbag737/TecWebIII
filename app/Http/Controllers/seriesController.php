<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seriesController extends Controller
{
    public function listarSerie()
    {
        $series = [
            "Grey's Anatomy",
            "Lost",
            "Son's of Anarchy"
        ];

        $html = "<ul>";

        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }

        $html .= "</ul";

        return $html;
    }
}
