<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>envio de correo</title>
</head>
<body>
    
    <h1> Se ha creado un post nuevo !</h1>
    <h3>Requiere de aprobación</h3>

    <a href="{{route('posts.show', $post)}}"> click para ver </a>

</body>
</html>