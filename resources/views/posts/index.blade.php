<app-layout>

    <a href="/posts/create"> Crear nuevo post </a>

    @if (session('success'))
        <p> {{ session('success') }} </p> 
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{$post->id}}"> {{$post->titulo}} </a>
            </li>
        
        @endforeach
    </ul>



</app-layout>