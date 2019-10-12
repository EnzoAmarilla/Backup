<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'gos_producto_marca_id' => $row[0],
            'gos_producto_familia_id' => $row[1],
            'gos_producto_medida_id' => $row[2],
            'codigo' => $row[3],
            'nomb_producto' => $row[4],
            'descripcion' => $row[5],
            'codigo_sat' => $row[6],
            'ganancia' => $row[7],
            'cant_minima' => $row[8],
            'venta' => $row[9],
        ]);
    }
}
