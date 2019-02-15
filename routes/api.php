<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buku/search/','BukuController@index');
Route::get('buku/search/{pengarang}','BukuController@search');
