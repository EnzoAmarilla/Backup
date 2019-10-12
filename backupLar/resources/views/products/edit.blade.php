<!DOCTYPE html>
<html lang="en" dir="ltr">
  @php
    $title = 'Edit Product';
  @endphp
  @include('layouts.head')
  <body>
  @include('layouts.nav-bar')

<div class="container">
  <h3>Editar Producto</h3>
  <hr>

  @include('products.form', [
    'url' => url('products', $product->gos_producto_id),
    'method' => 'patch'
  ])
<br>
<br>
<br>

<a href="{{url('/products/index')}}" class="btn waves-effect waves-light right">Volver al listado</a>
<a href="/products/{{$product->gos_producto_id}}" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">Volver a detalle</a>

</div>
<br>
<br>
@include('layouts.footer')
  </body>
</html>
