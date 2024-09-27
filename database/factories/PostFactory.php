<?php
// ? La carpeta factories es utilizada para crear datos falsos en la tabla, por cada tabla que hagas se creara un factory de dicha tablas
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Aqui agregas que valores va a falsificar laravel, con sus respectivas especificaciones
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->text(1600),
            
        ];
    }
}