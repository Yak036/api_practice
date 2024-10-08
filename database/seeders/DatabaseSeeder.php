<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
// ? en la carpeta seeders especificas CUANTOS datos vas a crear
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(120)->create();
    }
}