<!DOCTYPE html>
<html lang="en" dir="ltr">
@php
$title = "Details";
@endphp
@include('layouts.head')
<body>
@include('layouts.nav-bar')

<div class="container">

    <h3>Detalle del producto</h3>
<hr>
<br>
     <div class="col s12 m6 l8">
          <div class="card subscriber-list-card animate fadeRight">
             <div class="card-content pb-1">
                <h4 class="card-title mb-0">Producto : {{ $product->nomb_producto }}</h4>
             </div>
             <table class="subscription-table responsive-table highlight">
                <thead>
                   <tr>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Codigo Sat</th>
                      <th>Ganancia</th>
                      <th>Cantidad minima</th>
                      <th>Venta</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td>{{ $product->nomb_producto }}</td>
                      <td>{{ $product->descripcion }}</td>
                      <td>{{ $product->codigo_sat }}</td>
                      <td>{{ $product->ganancia }}</td>
                      <td>{{ $product->cant_minima }}</td>
                      <td><span class="badge pink lighten-5 pink-text text-accent-2">{{ $product->venta }}</span></td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
       <br>
       <hr>
       <br>
       <a href="{{url('/products/index')}}" class=""><button class="btn waves-effect waves-light right" type="button" name="button">Volver al Listado</button></a>
       <a href="/products/{{$product->gos_producto_id}}/edit" class=""><button class="btn waves-effect waves-light left" type="button" name="button">Editar Producto</button></a>
       <br>
     </div>
     <br>
     <br>
     @include('layouts.footer')
  </body>
</html>
