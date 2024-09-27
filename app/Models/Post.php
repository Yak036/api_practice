<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ? aqui configuras ciertos parametros de la tabla
    //? la funcion debe llamarse get(nombre de la columna)Attribute()
    public function getExcerptAttribute()
    {
        return substr($this->content, 0 , 120);

    }
    public function getPublishedAtAttribute()
    {
        // ? Con la primera linea muestras cuando se publico
        // ? Con la segunda muestras hace cuanto se publico
        // return $this->created_at->format('d/m/Y');

        return $this->created_at->diffForHumans();
    }
}