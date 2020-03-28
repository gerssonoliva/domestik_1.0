<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Domestik | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('adminlte/dist/img/icono.ico')}}" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h2><b>Sistema Domestik</b></h2>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <h3><p class="login-box-msg"><b>Inicio Sesión</b></p></h3>
      
      <!--<form method="post" action="/login2">-->
      {{ Form::open(array('url' => '/login2', 'method' => 'POST')) }}
      @csrf
        <div class="input-group mb-3">
          <!--<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">-->
          {{ Form::text('usuario', ['class' => 'form-control']) }}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!--<input type="password" name="contra" id="contra" class="form-control"  placeholder="Contraseña">-->
          {{ Form::password('contra', ['class' => 'form-control']) }}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="recordarme">
                Recordarme
              </label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>

        </div>
      {{ Form::close() }}
      <!--</form>-->

      <p class="mb-1">
        <a href="forgot-password.html">Olvidé mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Nuevo registro</a>
      </p>
    </div>

  </div>
</div>

<!-- SCRIPTS REQUERIDOS-->
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
