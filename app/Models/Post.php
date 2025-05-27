<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //se especifica que tabla debe administrar
    protected $table = 'posts';

    protected $fillable = ['titulo', 'contenido', 'categoria']; //CUALES SON LOS DATOS QUE VAN A SER ASIGNABLES EN MASA, EL RESTO ELOQUEN LOS IGNORA
   // protected $guarded = ['id']; //PROTEGE Y EVITA QUE CAMPOS SENSIBLES SEAN POSIBLES DE MODIFICAR 
   //SE USA UNO O EL OTRO, PERO NO AMBOS


   //QH: Le indicamos a laravel el campo que queremos que capture/busque. Lo que nos ayuda a optimizar la URL (slug=cadenas de url)
   public function getRouteKeyName()
   {
    return 'id';
   } 

    
}
