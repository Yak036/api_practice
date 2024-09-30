<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\v2\PostController as PostV2;



//? Con los alias de arriba permite llamar a un controlador que tenga el mismo nombre que otro mediante un ALIAS
Route::prefix('v1')->group(function() {
    Route::apiResource('posts', PostV1::class)->only(['index','show','destroy'])->middleware('auth:sanctum');
});

Route::prefix('v2')->group(function() {
    Route::apiResource('posts', PostV2::class)->only(['index','show','destroy'])->middleware('auth:sanctum');
});



// ? Puedes colocarlo de esta forma si quieres encerrarlas en un grupo
// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('v1/posts', PostV1::class);
//     Route::apiResource('v2/posts', PostV2::class);
// });