<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//controlador de Post

class PostController extends Controller
{

    public function home() {
        return view('home');
    }

    public function index(){
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    //las variable q deben enviarse del método hacia la vistas
    public function show($post){

        $post = Post::find($post);

        return view('posts.show', compact('post')); //con la funcion compact es igual a hacer ['post' => $post]
    }

    public function create() {      

        return view('posts.create');

    }

    public function store(Request $request) {
        //desde este metodo vamos a capturar lo que se envia por el formulario
        //la mejor forma (hasta ahora) es inyectando un objeto REQUEST 

        $post = new Post();
        $post->titulo = $request->titulo;
        $post->categoria = $request->categoria;
        $post->contenido = $request->contenido;
        
        $post->save();

        return redirect()
            ->route('posts.index')
            ->with('success', 'El post se inserto correctamente.') ;
    }

    public function edit($post) {

        $post = Post::find($post);

        return view('posts/edit', compact('post'));

    }

    public function update(Request $request, $post){
      
        $post = Post::find($post);

        $post->titulo = $request->titulo;
        $post->categoria = $request->categoria;
        $post->contenido = $request->contenido;
        
        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function destroy($post) {

        $post = Post::find($post);

        $post -> delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'El post se elimino correctamente.');

    }
}
