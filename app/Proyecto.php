<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
     protected $frillable = ['nameProyecto','urlProyecto','descProyecto','fecha_inicio','logo'];

     public function categoria()
     {
        return $this->belongsTo(Categoria::class);
     }

     public function servidor()
     {
         return $this->belongsTo(Servidor::class);
     }

     public function plan()
     {
         return $this->belongsTo(Plan::class);
     }

     public function dominio()
     {
         return $this->belongsTo(Dominio::class);
     }

     public function accesos()
     {
         return $this->belongsTo(Acceso::class);
     }

     

     
}
