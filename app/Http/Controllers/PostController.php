<?php

namespace App\Http\Controllers;
// ? Todo esto se crea mediante el mismo comando utilizado al inicio
//! php artisan make:model Post -cmf

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('index',[
            'posts' => Post::latest()->paginate()
        ]);
    }
}