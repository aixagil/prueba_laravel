<app-layout>

<a href={{route('posts.index')}}> Voler atras </a>

<h1> Formulario para crear un nuevo post </h1>

    <form action={{route('posts.store')}} method="POST">
        @csrf <!-- Laravel espera siempre un token cuando se utiliza el metodo POST -->

        <label for=""> Titulo: 
            <input type="text" name="titulo">
        </label>

        <br>
        <br>

        <label for=""> Categoria:  
            <input type="text" name="categoria">
        </label>

        <br>
        <br>

        <label for="">
            Contenido: 
            <textarea name="contenido" ></textarea>
        </label>

        <br>
        <br>

        <label> Slug: 
            <input type="text" name="slug" value ="Defina un nombre unico para el post">
        </label>
        
        <br>
        <br>
        <button type="submit">
            Crear
        </button>
    </form>

</app-layout>