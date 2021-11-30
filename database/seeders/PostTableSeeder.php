<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $categories = Category::all();

        foreach ($categories as $category) {
            
            for($i=1; $i<=20; $i++) {
                Post::create([
                    'title' => 'Categoria '.$i.' '.$category->title,
                    'url_clean' => 'categoria_'.$i.'_'.$category->title,
                    'content' => 'Esto es un ejemplo de contenido'.' '.$i,
                    'posted' => 'yes',
                    'category_id' => $category->id,

            ]);
            }
        } 
    }
}