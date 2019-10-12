<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

      protected $table = 'gos_producto_familia';

      protected $primaryKey = 'gos_producto_familia_id';

      Public $timestamps = false;

      protected $fillable = ['nomb_familia'];

      public function products(){
        return $this->hasMany(Product::class, 'gos_producto_familia_id');
      }

}
