<form class="" action="{{ $url }}" method="post">

  @method($method)
  @csrf

<div class="input-field col s12">
@include('dropdown', [
   'items' =>  $brands,
   'name' => 'gos_producto_marca_id',
   'text' => 'nomb_marca',
 ])
 </div>

 <div class="input-field col s12">
   @include('dropdown', [
      'items' =>  $families,
      'name' => 'gos_producto_familia_id',
      'text' => 'nomb_familia',
    ])
 </div>

  <div class="input-field col s12">
    @include('dropdown', [
       'items' =>  $measures,
       'name' => 'gos_producto_medida_id',
       'text' => 'nomb_medida',
     ])
  </div>

    <label for="">Codigo</label>
    <input class="validate" type="text" name="codigo" value="{{ old('codigo', $product->codigo) }}">

    <label for="">Nombre de Producto</label>
    <input type="text" name="nomb_producto" value="{{ old('nomb_producto' , $product->nomb_producto) }}">

    <label for="">Descripcion</label>
    <input type="text" name="descripcion" value="{{ old('descripcion', $product->descripcion) }}">

    <label for="">Codigo Sat</label>
    <input type="text" name="codigo_sat" value="{{ old('codigo_sat', $product->codigo_sat) }}">

    <label for="">Ganancia</label>
    <input type="text" name="ganancia" value="{{ old('ganancia', $product->ganancia) }}">

    <label for="">Cantidad minima</label>
    <input type="text" name="cant_minima" value="{{ old('cant_minima', $product->cant_minima) }}">

    <label for="">Venta</label>
    <input type="text" name="venta" value="{{ old('venta', $product->venta) }}">

    <div class="input-field col s12">
      <button class="btn waves-effect waves-light left" type="submit" name="action">Send
        <i class="material-icons left">send</i>
      </button>
    </div>

</form>
