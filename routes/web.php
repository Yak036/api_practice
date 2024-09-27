<?php

use Illuminate\Support\Facades\Route;

// ? Vas a usar la Routes/web para acceder a controladores de la api

Route::get('/',[\App\Http\Controllers\PostController::class, 'index']);