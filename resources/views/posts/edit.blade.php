<app-layout>

<a href={{route('posts.index')}}> Voler atras </a>

<h1> Formulario para editar un nuevo post </h1>

    <form action={{route('posts.update', [$post])}} method="POST"> <!-- usamos [] si requiere pasar mas de un parametro a la ruta -->
        @csrf <!-- Laravel espera siempre un token cuando se utiliza el metodo POST -->
        @method('PUT') <!-- SIEMPRE DEBE ESPECIFICARSE QUE SERÁ UN METODO PUT PORQUE SINO EL NAVEGADOR NO LO TOMA-->

        <label> Titulo: 
            <input type="text" name="titulo" value="{{$post->titulo}}">
        </label>

        <br>
        <br>

        <label for=""> Categoria:  
            <input type="text" name="categoria" value="{{$post->categoria}}">
        </label>

        <br>
        <br>

        <label for="">
            Contenido: 
            <textarea name="contenido">{{$post->contenido}}</textarea>
        </label>
        
        <br>
        <br>
        <button type="submit">
            Actualizar
        </button>
    </form>


</app-layout>