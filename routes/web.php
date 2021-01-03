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
}) ->name('homepage');

Route::get('/products', function () {

    $array_pasta = config('pasta');

    $pasta_lunga = array_filter($array_pasta, function($elemento) {
      return $elemento['tipo'] == 'lunga';
    });

    $pasta_corta = array_filter($array_pasta, function($elemento) {
      return $elemento['tipo'] == 'corta';
    });

    $pasta_cortissima = array_filter($array_pasta, function($elemento) {
      return $elemento['tipo'] == 'cortissima';
    });

    $data = [
        'formati_pasta' => [
          'lunga' => $pasta_lunga,
          'corta' => $pasta_corta,
          'cortissima' => $pasta_cortissima
        ]
    ];

    return view('products', $data);
}) ->name('prodotti');

Route::get('/product-details/{id}', function($id) {

  $array_pasta = config('pasta');
  $limite_id = count($array_pasta);

  if(is_numeric($id) && $id >= 0 && $id < $limite_id) {
    $product  = $array_pasta[$id];
    $data = [
      'pasta_selezionata' => $product,
      'id' => $id,
      'limite_id' => $limite_id,
    ];

    return view('detail', $data);
  } else {
    abort('404');
  }

}) ->name('pagina-dettaglio');

Route::get('/news', function () {
    return view('news');
})->name('news');
