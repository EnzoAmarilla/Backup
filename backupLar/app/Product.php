<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

      protected $table = 'gos_producto';

      protected $primaryKey = 'gos_producto_id';

      Public $timestamps = false;

      protected $fillable = ['gos_producto_marca_id' , 'gos_producto_familia_id' , 'gos_producto_medida_id' ,'codigo' , 'nomb_producto' , 'descripcion' , 'codigo_sat' , 'ganancia' , 'cant_minima', 'venta'];


}
