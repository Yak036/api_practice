<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

// ? Con esto llamas al recurso que vayas a utilizar para editar lo q se vera de la API
use App\Http\Resources\V1\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ? Esto es para traer una COLECCION DE LOS ULTIMOS DATOS SUBIDOS A LA DB (API)
        return PostResource::collection(Post::latest()->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return response()->json([
            'message'=>'El registro se a eliminado adecuadamente'
        ]);
    }
}