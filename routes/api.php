<?php

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);
