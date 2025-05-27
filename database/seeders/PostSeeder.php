<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*   
        $post1 = new Post();

        $post1->titulo = 'Post1';
        $post1->contenido = 'Contenido1';
        $post1->categoria = 'Catgoria1';

        $post1->save();
        */

        Post::factory(100)
        ->create();

        //si quiero crear mas de un post falso puedo hacer lo siguiente:
    }
}
