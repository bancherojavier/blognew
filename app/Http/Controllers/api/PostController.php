<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends ApiResponseController
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::
            join('post_images','post_images.post_id','=', 'posts.id')->
            join('categories','categories.id','=', 'posts.category_id')->
            select('posts.id','posts.title','posts.url_clean','posts.category_id',
            'posts.created_at','posts.updated_at','post_images.image',
            'categories.title as category')->
            orderBy('posts.created_at','desc')->paginate(10);

        //$posts = Post::orderBy('created_at','desc')->paginate(1);
        //return response()->json($posts,200);  
        return $this->successResponse($posts); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)

    {
        $post->image;
        $post->category;
        return $this->successResponse($post);
        
    }

    
    public function url_clean(String $url_clean)
    

    {
        //dd($url_clean);
        $post = Post::where('url_clean',$url_clean)->firstOrFail();
        //dd($post);
        $post->category;
        $post->image;
        return $this->successResponse($post);
        
    }


    public function category(Category $category)

    {
        
        return $this->successResponse(['pots'=>$category->post()->paginate(10),'category'=>$category]);
        
    }
}
