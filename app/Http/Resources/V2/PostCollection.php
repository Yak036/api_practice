<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // ? lo usaras para una especie de firma
        return [
            'data'=> $this->collection,
            'meta'=>[
                'organizacion' => 'Platzi',
                'authors'=>[
                    'Italomoralesf',
                    'Platzi'

                ]
                ],
                'type' => 'articles'
        ];
    }
}