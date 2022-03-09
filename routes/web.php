<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teste;
use Illuminate\Http\Request;

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

Route::get('/teste-view', function () {
    return Teste::get();
});

Route::post('/teste', function (Request $request) {
    Teste::create($request->toArray()); 
    return $request;
});