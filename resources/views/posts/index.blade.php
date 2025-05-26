<app-layout>

    <a href="/posts/create"> Crear nuevo post </a>

    <br>
    <br>
    
    <a href="/posts/categoria"> Listar por categoria </a>

    @if (session('success'))
        <p> {{ session('success') }} </p> 
    @endif

    <!--  echo muestra un valor  -->

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}"> {{$post->titulo}} </a>
            </li>
        
        @empty($posts)
            <h3>No hay posts que mostrar</h3>
        @endempty
        @endforeach
    </ul>



</app-layout>