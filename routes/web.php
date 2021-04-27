<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables', function(){
    $mensaje = 20;
    var_dump($mensaje);
    echo "<hr/>";
    $mensaje = '2242753';
    var_dump($mensaje);
});

Route::get('arreglos', function(){
    $estudiantes = ["Ana", "Jorge", "Luis"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get('Paises', function(){
    $paises = [
        "colombia" => [
            "capital" => "Bogotá",
            'modeda' => "Pesos",
            "poblacion" => 51
        ],
        "peru" => [
            "capital" => "Lima",
            "moneda" => "sol",
            "poblacion" => 33.9
        ],
        "paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guarani",
            "poblacion" => 7
        ]
    ];

    foreach ($paises as $pais) {
        echo "<pre>";
        print_r($pais);
        echo "</pre>";
        echo "<hr />";
    }
});
