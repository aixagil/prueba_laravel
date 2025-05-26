<app-layout>

    <a href={{route('posts.create')}}> Crear nuevo post </a>

    <br>
    <br>

    <a href={{route('posts.showByCategoria')}}> Listar por categoria </a>

    @if (session('success'))
        <p> {{ session('success') }} </p> 
    @endif

    <!--  echo muestra un valor  -->

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href={{route('posts.show', $post->id)}}> {{$post->titulo}} </a>
            </li>
        
        @empty($posts)
            <h3>No hay posts que mostrar</h3>
        @endempty
        @endforeach
    </ul>



</app-layout>