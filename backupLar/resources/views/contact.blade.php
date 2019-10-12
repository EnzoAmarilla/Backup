<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('layouts.head')
  <body>
@include('layouts.nav-bar')

<div class="container">
<h3>Contactanos</h3>
<hr>
<br>
<br>
<br>

    <div class="col s12 m12 l8 contact-form margin-top-contact">
        <div class="row">
          <form class="col s12" action="#">
            <div class="row">
              <div class="col m6 s12">
                <label for="name">Nombre</label>
                <input id="name" type="text" class="validate">
              </div>
              <div class="col m6 s12">
                <label for="email">Apellido</label>
                <input id="email" type="text" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="col m6 s12">
                <label for="company">Telefono</label>
                <input id="company" type="text" class="">
              </div>
              <div class="col m6 s12">
                <label for="budget">Email</label>
                <input id="budget" type="text" class="">
              </div>
              </div>
              <div class="row">
              <div class="col m6 s12">
                <label for="name">Marca Auto</label>
                <input id="name" type="text" class="validate">
              </div>
              <div class="col m6 s12">
                <label for="name">Detalle</label>
                <input id="name" type="text" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="col s12 width-100">
                <label for="textarea1">Mas detalles de contacto</label>
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <br>
                <br>
                <button type="submit" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">Enviar</button>
              </div>
            </div>
          </form>
        </div>
        </div>

</div>

@include('layouts.footer')
  </body>
</html>
