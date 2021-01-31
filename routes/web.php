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
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'http://127.0.0.1:8000/api/blogs');
    dd($response);

    // echo $response->getStatusCode(); // 200
    // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
    $blogs = $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

    // $response = $client->request('GET', 'http://127.0.0.1:8000/api/askexperts');
    // $experts = $response->getBody();

    return view('parentune', compact('blogs', 'experts'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
