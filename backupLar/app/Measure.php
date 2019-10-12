<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $table = 'gos_producto_medida';

    protected $primaryKey = 'gos_producto_medida_id';

    Public $timestamps = false;

    protected $fillable = ['nomb_medida'];

    public function products(){
      return $this->hasMany(Product::class, 'gos_producto_medida_id');
    }

}
