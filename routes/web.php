<?php

use App\Http\Controllers\GPSController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;


Route::get('/series/', [seriesController::class, 'index']);

Route::get('/home', HomeController::class);

Route::get('/gps', [GPSController::class, 'recalculandoRota']);

Route::get('/series/criar', [SeriesController::class, 'create']);
















/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    echo "Olá Mundo!";
});

Route::get('/soma', function () {
    $a = 30;
    $b = 30;
    $total = $a + $b;

    echo ("A soma é {$total}");
});

Route::get(
    '/soma/{paraml}/{param2}',
    function ($p1, $p2) {
        $total = $p1 + $p2;
        return "A soma é {$total}";
    }
);

Route::get('adicionar-produto/{param1}/{param2?}',
function($p1, $p2 = null){
    $texto = "Parametro 1: {$p1}";
    $texto .= " Paramatro 2: {$p2}";

    return $texto;
});*/

/*Route::get('listarSeries', function(){
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

});*/


