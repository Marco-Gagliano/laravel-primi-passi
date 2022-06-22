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

    $data = [
        'hello' => 'Hello World',
    ];

    return view('home', $data);
})->name('home');


Route::get('/playstation', function () {
    $data = [
        'nome' => 'Playstation 5',
        'produttore' => 'Sony',
        'listaGiochi' => [
            'Horizon Forbidden West',
            'God Of War Ragnarok',
            'Gran Turismo 7',
            'Ratchet and Clank: Rift Apart',
            'Elder Ring',
            'Ghost of Tsushima'
        ]
    ];

    return view('playstation', $data);
})->name('playstation');


Route::get('/xbox', function () {
    $data = [
        'nome' => 'Xbox Series X',
        'produttore' => 'Microsoft',
        'listaGiochi' => [
            'Starfield',
            'Gears 5',
            'Forza Horizon 5',
            'Halo Infinite',
            'Quantum Break',
            'Battletoads',
        ]
    ];
    return view('xbox', $data);
})->name('xbox');


Route::get('/nintendo', function () {
    $data = [
        'nome' => 'Nintendo Switch',
        'produttore' => 'Nintendo',
        'listaGiochi' => [
            'Bayonetta 2',
            'Pokemon Spada',
            'Astral Chain',
            'Xenoblade Chronicles 2',
            'Metroid Dread',
            'Mario Strikers: Battle League Football',
            'Hyrule Warriors',
        ]
    ];
    return view('nintendo', $data);
})->name('nintendo');


