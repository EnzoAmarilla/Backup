{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css')}}"> --}}
        {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/materialize.css')}}">
        <link rel="stylesheet" href="{{ asset('css/vendor.min.css')}}">

    </head>
    <body> --}}

         {{-- <div class="flex-center position-ref full-height">
             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            {{-- <nav>
              <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile-demo2" class="button-collapse hide-on-med-and-up sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#">Sass</a></li>
                  <li><a href="#">Components</a></li>
                  <li><a href="#">Javascript</a></li>
                  <li><a href="#">Mobile</a></li>
                </ul>
                <ul class="sidenav" id="mobile-demo2">
                  <li><a href="#">Sass</a></li>
                  <li><a href="#">Components</a></li>
                  <li><a href="#">Javascript</a></li>
                  <li><a href="#">Mobile</a></li>
                </ul>
              </div>
            </nav> --}}

           {{-- <div class="container">
              @yield('content')
          </div> --}}
        {{-- </div> --}}
    {{-- </body>
</html> --}}


<!DOCTYPE html>
<html>
@php
	$title='Inicio';
@endphp
@include('layouts.head')
<body>
<div class="">

@include('layouts.nav-bar')
{{-- <div class="nav-content black">
	<ul class="tabs tabs-transparent">
		<li class="tab"><a href="{{ url('home')}}">Iniciar Sesion</a></li>
		<li class="tab"><a class="active" href="{{ url('register')}}">Registrate</a></li>
	</ul>
</div> --}}
    <section class="intro-section">
    	<div class="auto-container">
        	<div class="border clearfix">
						<div class="card-action border-non center">
							<h3>Puedes solicitarnos un presupuesto online rapidamente</h3>
							<hr>
							<br>
							<a href="{{ url('products/create')}}"><button type="submit" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">Solicitar</button></a>
						</div>
            </div>
        </div>
    </section>

	<div class="fotos-inicio">
		<div class="img-inicio">

			<img src="{{ asset('img/mecanic1.jpg') }}" alt="">
		</div>
		<div class="img-inicio">
			<img src="{{ asset('img/mecanic4.jpg') }}" alt="">
		</div>
		<div class="img-inicio">
			<img src="{{ asset('img/mecanic3.jpg') }}" alt="">
		</div>
		<div class="img-inicio">
			<img src="{{ asset('img/mecanic5.jpg') }}" alt="">

		</div>
	</div>
@include('layouts.footer')

</body>
</html>
