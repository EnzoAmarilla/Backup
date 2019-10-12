<!DOCTYPE html>
<html lang="en" dir="ltr">
  @php
  $title = 'Create';
  @endphp
  @include('layouts.head')
  <body>
  @include('layouts.nav-bar')

{{-- @section('content') --}}

<div class="container">

    <h3>Crear Presupuesto</h3>

@include('products.form', [
  'url' => url('products'),
  'method' => 'post'
])

{{-- <a href="{{ url('products/export')}}" class=""><button class="btn waves-effect waves-light right" type="button" name="button">Descargar en PDF</button></a> --}}

</div>
<br>
<br>
<br>
<br>
@include('layouts.footer')
</body>
</html>
