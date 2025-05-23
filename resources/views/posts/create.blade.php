<app-layout>

<a href="/posts"> Voler atras </a>

<h1> Formulario para crear un nuevo post </h1>

    <form action="/posts" method="POST">
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
        <button type="submit">
            Crear
        </button>
    </form>

</app-layout>