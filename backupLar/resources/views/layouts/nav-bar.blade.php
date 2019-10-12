{{-- <!-- Dropdown Structure -->
<nav>
  <div class="nav-wrapper">
    <i class="fas fa-car"></i>
    <ul class="right hide-on-med-and-down">
      <li><a href="index">Listado de Productos</a></li>
      <li><a href="#">Componentes</a></li>

      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="{{url('products/create')}}" data-target="dropdown1">Crear Producto<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav> --}}

<nav class="nav-extended black">
    <div class="nav-wrapper">

      <a href="{{ url('/')}}"><i class="material-icons medium left">directions_car build</i></a>
      <a id='title-navbar' href="{{ url('/')}}">Taller Automotriz</a>
      <a href="{{ url('/')}}" data-target="mobile-demo" class="button-collapse  hide-on-med-and-up"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{url('/')}}">Inicio</a></li>
        <li><a href="{{url('/products/create')}}">Crear Presupuesto</a></li>
        <li><a href="{{ url('/products/index')}}">Listado de productos</a></li>
        <li><a href="{{url('contact')}}">Contacto</a></li>
      </ul>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="{{url('/inicio')}}">Inicio</a></li>
        <li><a href="{{ url('products/index')}}">Listado de productos</a></li>
        <li><a href="{{url('contact')}}">Contacto</a></li>
      </ul>
      </div>

    </nav>
