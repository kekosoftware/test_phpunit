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

Route::get('/json-test', function () {
    return response()->json([
        'name' => ['Jone', 'Julie'],
        'updated' => true,
    ]);
});

Route::get('/view-test', function () {
    return view(
        'test', [
            'name' => 'Taylor'
        ]
    );
});
