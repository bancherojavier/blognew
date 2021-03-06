<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
      

        return view('dashboard.post.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.create',['post' => new Post(), 'categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        //dd($request->validated());

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     //'url_clean' => 'required|min:5|max:500',
        //     'content' => 'required|min:5',
            
        // ]);
        
        Post::create($request->validated());
        
        return redirect()->route('post.create')->with('status', 'Post creado con exito');

        //return "Hola Mundo...; ". $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
 
        return view('dashboard.post.show',['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }

    public function edit(Post $post)
    {
        //dd($post->image->image);
        $categories = Category::pluck('id','title');
        
        return view('dashboard.post.edit',['post' => $post, 'categories' => $categories]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {

        $post->update($request->validated());
        
        return redirect()->route('post.index')->with('status', 'Post actualizado con exito');

    }
    
    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,bmp,png|max:10240',
        ]);
        
        $filename = time() . '.' . $request->image->extension();
        //$request->file('image')->storeAs('public/post', $post->id.'.'.$request->file('image')->extension());
        $request->image->move(public_path('images'), $filename);

        PostImage::create([
            'post_id' => $post->id,
            'image' => $filename,
        ]);
        return back()->with('status', 'Imagen agregada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('status', 'Post eliminado con exito');
    }
 
}
