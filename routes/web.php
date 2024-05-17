<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/listings', function() {
    return view('listings', [
        "title" => "List Ikan",
        "data" => Listing::all(),
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view('listing', [
        "title" => "Ikan " . $id,
        "data" => Listing::find($id),
    ]);
});

Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
        // ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/number/{id}', function($id) {    
    return response('Number ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    // dd($request)
    return response($request->name . ' ' . $request->city);
});