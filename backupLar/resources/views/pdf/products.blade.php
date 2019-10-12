<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .table-pdf {
        width: 100%;
        border: 1px solid black;
        padding: 20px;
      }
    </style>
  </head>
  <body>
      <table class="table-pdf">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre Prod</th>
            <th>Descripcion</th>
            <th>CodigSat</th>
            <th>Ganancia</th>
            <th>Cant Min</th>
            <th>Venta</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
              <tr>
                <td>{{ $product->gos_producto_id }} </td>
                <td>{{ $product->nomb_producto }} </td>
                <td>{{ $product->descripcion }} </td>
                <td>{{ $product->codigo_sat }} </td>
                <td>{{ $product->ganancia }} </td>
                <td>{{ $product->cant_minima }} </td>
                <td>{{ $product->venta }} </td>
              </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>
