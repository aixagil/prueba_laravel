<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function show(Post $post){

        //$post = Post::find($post);

        return view('posts.show', compact('post')); //con la funcion compact es igual a hacer ['post' => $post]
    }

    public function showByCategoria() {

        $posts = Post::orderBy('categoria', 'asc')->get()->groupBy('categoria');
        
        return view('posts.showByCategoria', compact('posts'));//devuelve la vista y pasa la variable

    }

    public function create() {      

        return view('posts.create');

    }

    public function store(StorePostRequest $request) {

        $post = Post::create($request->all());

        //configuracion del correo electronico, creando un archivo 
        Mail::to('prueba@prueba.com')-> send(new PostCreateMail($post)); //se llama al faker MAIL


        return redirect()
            ->route('posts.index')
            ->with('success', 'El post se inserto correctamente.') ;
    }


    public function edit(Post $post) {

       // $post = Post::find($post);

        return view('posts/edit', compact('post'));

    }

    public function update(Request $request,Post $post){
      
       // $post = Post::find($post); //al usar Post, laravel sabe que debe hacer..
       $request->validate([
            'titulo' => 'required|min:5|max:250', //esta es una forma de expresar las validaciones, con | dentro del ' ' 
            'slug' => ['required', 'min:5', 'max:100', "unique:posts,slug,{$post->id}"], //otra forma es esta
            'contenido' => 'required',
            'categoria' => 'required',
        ]);

       $post->update($request->all());
/*   
        $post->titulo = $request->titulo;
        $post->slug = $request->slug;
        $post->categoria = $request->categoria;
        $post->contenido = $request->contenido;
        
        $post->save();
*/

        return redirect()->route('posts.index', $post);
    }

    public function destroy(Post $post) {

        //$post = Post::find($post);

        $post -> delete();

        return redirect()
            ->route('posts.index')
            ->with('success', 'El post se elimino correctamente.');

    }
}
