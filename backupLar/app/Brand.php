<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'gos_producto_marca';

    protected $primaryKey = 'gos_producto_marca_id';

    Public $timestamps = false;

    protected $fillable = ['nomb_marca'];

    public function products(){
      return $this->hasMany(Product::class, 'gos_producto_marca_id');
    }
}
