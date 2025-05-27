<app-layout>

<a href={{route('posts.index')}}> Voler atras </a>

<h1> Formulario para crear un nuevo post </h1>

<!-- Es una forma de mostar los errores pero tambien se pueden usar las directivas de blade
@if ($errors->any()) 
    <div>
        <h2>Errores: </h2>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
   
-->
    <form action={{route('posts.store')}} method="POST">
        @csrf <!-- Laravel espera siempre un token cuando se utiliza el metodo POST -->

        <label for=""> Titulo: 
            <input type="text" name="titulo" value="{{old('titulo')}}">   
<!-- El metodo old() verifica si hay errores de verificacion y nos permite recuperar lo que estaba escrito por el usuario -->
        </label>
        @error('titulo') <p> {{$message}} </p> @enderror
        <br>
        <br>

        <label for=""> Categoria:  
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria') <p> {{$message}} </p> @enderror

        <br>
        <br>

        <label for="">
            Contenido: 
            <textarea name="contenido" value="{{old('contenido')}}"></textarea>
        </label>
        @error('contenido') <p> {{$message}} </p> @enderror

        <br>
        <br>

        <label> Slug: 
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>
        @error('slug') <p> {{$message}} </p> @enderror
        <br>
        <br>
        <button type="submit">
            Crear
        </button>
    </form>

</app-layout>