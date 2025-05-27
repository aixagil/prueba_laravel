<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //se especifica que tabla debe administrar
    protected $table = 'posts';

    //Asignacion masiva: podemos definir los datos que se van a tomar [$fillable] o los datos que se deben ignorar [$guarded]
 //CUALES SON LOS DATOS QUE VAN A SER ASIGNABLES EN MASA, EL RESTO ELOQUEN LOS IGNORA
    protected $fillable = ['titulo', 'contenido', 'categoria', 'slug']; //lo que ayuda a la proteccion de datos


   // protected $guarded = ['id']; //PROTEGE Y EVITA QUE CAMPOS SENSIBLES SEAN POSIBLES DE MODIFICAR 
   //SE USA UNO O EL OTRO, PERO NO AMBOS A LA VEZ

   //QH: permite decirle a laravel con que campo quiero que trabaje/recupere, puede ser el id, o cualquier otro campo unico
   public function getRouteKeyName()
   {
    return 'slug';
   }


    
}
