<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();
        $posts = Post::all();

        foreach ($posts as $post) {
               
                PostImage::create([
                    'image' => '1637369252.jpg',
                    'post_id' => $post->id,
                    

            ]);
            
        } 
    }
}
