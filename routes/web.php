<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', function() {
    return view('listings', [
        "title" => "List Ikan",
        "data" => Listings::all(),
    ]);
});

Route::get('/list/{id}', function($id) {
    return view('list', [
        "title" => "Ikan " . $id,
        "data" => Listings::search($id),
    ]);
});

Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/number/{id}', function($id) {    
    return response('Number ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    return response($request->name . ' ' . $request->city);
});