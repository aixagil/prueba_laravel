<app-layout>

    <a href={{route('posts.index')}}> Voler atras </a>

    
    <h2> Titulo: {{$post->titulo}}</h2>
    <p>{{$post->contenido}}</p>
    <p><span>Categoria:</span> {{$post->categoria}}</p>

    <a href={{route('posts.edit', $post->id)}}> Editar post </a> <!-- los enlaces solo hacen peticiones de tipo get -->
    <br>
    <br>
    <!-- Por lo que al boton delete hay que rearlo como u formulacion y dentro un boton -->
    <form action={{route('posts.update', $post->id)}} method="POST">

        @csrf
        @method('DELETE')

        <button type="submit"> Eliminar post</button>
    </form>

</app-layout>
