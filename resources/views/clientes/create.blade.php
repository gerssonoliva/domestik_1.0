@extends('websites.content')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <h2><strong>Registro</strong></h2>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registro nuevo cliente Domestik</p>
      {!! Form::open(['url' => '/clientes', 'method'=>'post']) !!}
      <!--<form action="/clientes" method="post">-->
        <div class="input-group mb-3">
          <input type="text" name="nombre" class="form-control" placeholder="Nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="direccion" class="form-control" placeholder="Dirección">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-marker"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="correo" class="form-control" placeholder="Correo personal">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" name="fecha_nac" class="form-control" placeholder="Fecha de Nacimiento">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-window"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="telefono" class="form-control" placeholder="Teléfono">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Usuario Domestik">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Acepto los <a href="#">términos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          </div>
          <!-- /.col -->
        </div>
      <!--</form>-->
      {!! Form::close() !!}
      <div class="social-auth-links text-center">
        <p>- O -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Registrarse usando Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Registrarse usando Google+
        </a>
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection