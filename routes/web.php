<?php

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

Route::get('ping', ['as' => 'ping', function () {
    return 'pong';
}]);

Route::get('articles/{slug}-{id}', ['as' => 'article', function ($slug, $id) {
    return 'Link to this page: ' . route('article', ['slog' => $slug, 'id' => $id]);
}])->where('slug', '[a-z0-9\-]+')->where('id', '[0-9]+');

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'ip',
    ],
    function () {
        Route::get('users', function () {
            return 'List of users';
        });
        Route::get('articles', function () {
            return 'List of articles';
        });
    }
);