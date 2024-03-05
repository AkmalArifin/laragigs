<?php

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

Route::get('/list', function() {
    return view('listings', [
        "title" => "List Ikan",
        "data" => [
            [
                'id' => 1,
                'title' => "Ikan Pari",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta tortor vel quam consequat semper. Pellentesque sit amet cursus lectus, ac congue nulla. Proin egestas pellentesque dui, sagittis interdum nulla convallis vitae. Maecenas faucibus ullamcorper gravida. Nam nec pulvinar sem. Ut feugiat luctus nulla, a consectetur arcu sagittis a. Nunc a maximus nibh.'
            ],
            [
                'id' => 2,
                'title' => 'Ikan Hiu',
                'description' => 'Nullam semper tincidunt erat, eget vulputate dui maximus ac. Donec non dui placerat, maximus odio sit amet, convallis nunc. Curabitur euismod gravida tortor sed interdum. Praesent mattis est quis tellus consectetur, consectetur mollis erat vehicula. Vivamus id neque urna. Proin id massa mollis, condimentum dolor sed, varius sem. Nam eu neque sit amet augue fermentum commodo. Ut sit amet nunc ac orci pellentesque fringilla eget eget orci.'
            ]
        ]
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