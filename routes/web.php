<?php


use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//contiene los endpoins

Route::get('/', [PostController::class, 'home']); //pagina principal *

Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //LISTA TODOS LOS POSTS *

Route::get('/posts/categoria', [PostController::class, 'showByCategoria']); 

Route::get('/posts/create', [PostController::class, 'create']); //formulario para crear un post

Route::get('/posts/{post}', [PostController::class, 'show']); //trae un post en particular (por medio de su id) *

Route::post('/posts', [PostController::class, 'store']); //almacena lo que se crea *

Route::get('/posts/{post}/edit', [PostController::class, 'edit']); //muestra el formulario para editar




Route::put('/posts/{id}', [PostController::class, 'update']);
//ruta para procesar las actualizaciones

Route::delete('/posts/{id}', [PostController::class, 'destroy']);

//Route::resource('posts', PostController::class); //esta linea ya especifica todas las rutas anteriores sin necesidad de escribirlas/mencionarlas
