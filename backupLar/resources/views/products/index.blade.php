<!DOCTYPE html>
<html lang="en" dir="ltr">
  @php
  $title = 'Productos';
  @endphp
  @include('layouts.head')

  <body>
    @include('layouts.nav-bar')
<div class="container">

<h3> Listado de Productos </h3>
<hr>
<div class="container links-id">
  {{$products->links()}}
</div>


     <ul>
       <div class="row">
        @foreach ($products as $product)
          <form class="" action="/products/{{$product->gos_producto_id}}" method="get">
           <li>
            <div class="col s12 m4">
               <div class="card animate fadeLeft">
                  <div class="card-content  center">
                     <h6 class="card-title font-weight-400 mb-0">{{$product->nomb_producto}}</h6>
                     <img src="../../../app-assets/images/cards/watch.png" alt="" class="responsive-img" />
                     <p><b>{{$product->descripcion}}</b></p>
                     <p>$ {{$product->venta}}</p>
                  </div>
                  <div class="card-action border-non center">
                     <button type="submit" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">Ver Mas</button>
                  </div>
               </div>
            </div>
            </li>
          </form>
          @endforeach
        </div>
       </ul>
       <hr>
       <hr>

       {{-- <form action="{{ url('/products/importExcel') }}" method="post" enctype="multipart/form-data">
         @csrf

         <input type="file" name="file">

         <button class="btn waves-effect waves-light right">Importar Productos</button>
       </form> --}}

       <a href="{{ url('products/export')}}" class=""><button class="btn waves-effect waves-light right" type="button" name="button">Descargar en PDF</button></a>
       <form action="{{ url('/products/importExcel') }}" method="post" enctype="multipart/form-data">
         @csrf

         <input type="file" name="file">

         <button class="btn waves-effect waves-light center">Importar Productos</button>
       </form>
       <br>
       <a href="{{ url('products/exportExcel')}}" class=""><button class="btn waves-effect waves-light right" type="button" name="button">Descargar en EXCEL</button></a>
       <br>
       <br>
       <br>
 </div>
@include('layouts.footer')
</body>
</html>
