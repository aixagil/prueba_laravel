<x-mail::message> 

# Se ha creado un post nuevo !

<x-mail::panel>
Requiere de aprobacion
</x-mail::panel>

<x-mail::button :url="route('posts.show',$post)">
click para ver
</x-mail::button>


</x-mail::message>