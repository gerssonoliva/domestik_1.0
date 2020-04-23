<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Domestik | Sitio Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Integración Facebook Opengraph: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Integración de tarjetas de Twitter: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Icono para la pestaña de página -->
  <link rel="shortcut icon" href="{{ asset('webSite/img/icono.ico')}}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('webSite/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('webSite/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('webSite/lib/animate-css/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('webSite/css/style.css')}}" rel="stylesheet">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

<body>
  <div id="preloader"></div>
  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="{{asset('webSite/img/logo1.png')}}" alt="" title="" /></img></a>
      </div>
      <!--Contenedor del menú de navegación-->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="web">Inicio</a></li>
        </ul>
      </nav>
      <!-- #Contenedor del menú de navegación -->
    </div>
  </header>
  <!-- #Sección encabezado -->

  <div class="row wow fadeInUp" style="text-align: center">
    @yield('content')
  </div>
  
  <!--==========================
  Pie de página
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Domestik S.A.C.</strong>. Todos los derechos reservados
          </div>
          <div class="credits">
            Visita <a href="https://www.youtube.com/channel/UCU4UbRb2hBiDidP8sqE8Ouw">Domestik</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="{{asset('webSite/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('webSite/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('webSite/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('webSite/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('webSite/lib/morphext/morphext.min.js')}}"></script>
  <script src="{{asset('webSite/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('webSite/lib/stickyjs/sticky.js')}}"></script>
  <script src="{{asset('webSite/lib/easing/easing.js')}}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="{{asset('webSite/js/custom.js')}}"></script>
  <script src="{{asset('webSite/contactform/contactform.js')}}"></script>

</body>
</html>
