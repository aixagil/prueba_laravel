<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //se especifica que tabla debe administrar
    protected $table = 'posts';

    protected $fillable = ['titulo', 'contenido', 'categoria', 'slug']; //CUALES SON LOS DATOS QUE VAN A SER ASIGNABLES EN MASA, EL RESTO ELOQUEN LOS IGNORA
   // protected $guarded = ['id']; //PROTEGE Y EVITA QUE CAMPOS SENSIBLES SEAN POSIBLES DE MODIFICAR 
   //SE USA UNO O EL OTRO, PERO NO AMBOS

   //QH: permite decirle a laravel con que campo quiero que trabaje/recupere, puede ser el id, o cualquier otro campo unico
   public function getRouteKeyName()
   {
    return 'slug';
   }


    
}
