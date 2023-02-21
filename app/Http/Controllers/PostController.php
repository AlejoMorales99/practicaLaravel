<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth' , ['except' => ['index','show'] ] );
    }


    public function index(){
        

         $posts = Post::get();

        return view('posts/index' , compact('posts'));
    }

    public function show(Post $post){

       return view('posts/show', compact('post') );
   }


   public function create(){
        return view('posts.create');
   }


   public function store(Request $request){


        $request->validate([
            'titulo' => ['required']
        ]);

        $post = new Post();

        $post->title = $request->titulo;


        //echo "<script>console.log('datos: ".json_encode($request->titulo)." ')</script>";

        $post->save();

        session()->flash('status','post creado');

        return redirect()->route('posts.index');



   }


   public function edit($id){

        $post = Post::findOrFail($id);

        return view('posts.edit' , compact('post'));

   }

   public function update(Request $request , $id){

    $request->validate([
        'titulo' => ['required']
    ]);

    $post = Post::findOrFail($id);

    $post->title = $request->titulo;


    //echo "<script>console.log('datos: ".json_encode($request->titulo)." ')</script>";

    $post->save();

    session()->flash('status','post creado');

    return redirect()->route('posts.index');

}


    public function destroy($id)
    {

         Post::destroy($id);

        return redirect()->route('posts.index')->with('status','post eliminado');




    }




}
