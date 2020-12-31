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
    return view('home');
});

Route::get('/products', function () {

    $data = [
        'pasta' => config('pasta')
    ];

    return view('products', $data);
}) ->name('prodotti');

Route::get('/product-details/{id}', function($id) {

    $array_pasta = config('pasta');
    $product  = $array_pasta[$id];

    $data = [
      'pasta_selezionata' => $product
    ];

    return view('detail', $data);
});

Route::get('/news', function () {
    return view('news');
})->name('news');
