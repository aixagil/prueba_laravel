<app-layout>

    <a href="/posts"> Voler atras </a>
    <h1>**** Listado por categoria ****</h1>

    <br>
    <br>

    @foreach ($posts as $categoria => $grupo)
        <p>categoria: {{$categoria}}</p>
                
        <ul>
            @foreach ($grupo as $post)
                <li> 
                    <a href={{route('posts.show', $post->id)}}> {{ $post->titulo }} </a>
                </li>
            @endforeach          
        </ul>
        
        @empty($posts)
            <h3>No hay posts que mostrar</h3>
        @endempty
    @endforeach    

</app-layout>
