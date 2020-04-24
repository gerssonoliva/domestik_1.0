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

</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Sección Hero
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="{{asset('webSite/img/logo1.png')}}" alt="ProOnliPc">
        </div>

        <h1>Bienvenidos a Domestik</h1>
        <h2>Tranquilo, nosotros lo hacemos <br>
        <span class="rotating">Limpieza del hogar, Cocina, Lavandería</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Empezar</a>
          <a href="#services" class="btn-services">Nuestros Servicios</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero"><img src="{{asset('webSite/img/logo1.png')}}" alt="" title="" /></img></a>
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>
      <!--Contenedor del menú de navegación-->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Acerca de nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#subscribe">Suscripción</a></li>
          <li><a href="#portfolio">Galería</a></li>
          <li><a href="#team">Equipo Domestik</a></li>
          <li><a href="#contact">Contáctanos</a></li>
          <li><div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                  <a href="#" class="d-block">
                    @guest
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a><strong>
                        @else
                          {{ Auth::user()->name }}
                      </strong>
                      <a class="dropdown-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    @endguest
                  </a>
                </div>
              </div></li>
          </ul>
        </nav>
      <!-- #Contenedor del menú de navegación -->
    </div>
  </header>
  <!-- #Sección encabezado -->

  <!--==========================
  Sección Acerca de nosotros
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Acerca de nosotros</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Una empresa que brinda servicios domésticos.</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">Tranquilo, nosotros lo hacemos</h2>
          <p class="about-text">
            Trabajo rápido y confiable, para que puedas ocupar tu tiempo con quienes mas quieres.
          </p>
          <p class="about-text">
            Garantía de servicio, con gran experiencia por parte de nuetros colaboradores, para 
            ofrecerte un servicio de calidad.
          </p>
          <p class="about-text">
            Horarios oportunos y acorde a lo que necesitas.
          </p>
          <p class="about-text">
            No lo dudes y vive esta nueva experiencia de la mano de los expertos en las actividades
            del hogar. <strong>Somos Domestik.</strong>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección Servicios
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestros Servicios</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Algunos de los diversos servicios domésticos que te ofrecemos</p>
        </div>
      </div>
      <table>
      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Limpieza del hogar</a></h4>
          <p class="service-description">Desde barrido y trapeado de pisos, hasta encerado, y pulido de utensilios de cuidado.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Cocina</a></h4>
          <p class="service-description">Preparación de confianza, la misma que inspira comer del hogar, incluyendo el servicio de limpieza de la cocina.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Lavandería</a></h4>
          <p class="service-description">Atención al estilo de nuestros clientes, para siempre brindarte lo que necesites.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class=""><i class=""></i></div>
          <h4 class="service-title"><a href=""></a></h4>
          <p class="service-description"></p>
        </div>
        <div class="col-md-4 service-item"> 
          <div class=""><i class=""></i></div>
          <h4 class="service-title"><a href=""></a></h4>
          <p class="service-description"></p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Paseo de mascotas</a></h4>
          <p class="service-description">Cuidado de mascotas, brindando un grato paseo, por alguna región cercana a la referencia del cliente.</p>
        </div>
      </div>
      </table>
    </div>
  </section>

  <!--==========================
  Sección de suscripción
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row" style="text-align: center">
        <div class="col-md-12">
          <h3 class="subscribe-title">Suscríbete a Cliente Premiun</h3>
          <p class="subscribe-text">Súmate a nuestros miles de clientes premiun disfrutando de las mejores ofertas y beneficios exclusivos.</p>
        </div>
        <div class="col-md-12 service-item"></div>

        <div class="col-md-4 service-item">
          <h4 class="subscribe-subtitle">Cliente Plata</h4>
          <h4 class="subscribe-title">S/.59.99</h4>
          <ul>
            <li><p class="subscribe-text">Entre 1 o 2 días a la semana.</p></li>
            <li><p class="subscribe-text">Limpieza del hogar</p></li>
            <li><p class="subscribe-text-negative">Cocina</p></li>
            <li><p class="subscribe-text-negative">Lavandería</p></p></li>
            <li><p class="subscribe-text-negative">Paseo de mascotas</p></li>
          </ul>
          <a class="subscribe-btn" href="suscripcion">Suscribirme</a>
        </div>

        <div class="col-md-4 service-item">
          <h4 class="subscribe-subtitle">Cliente Oro</h4>
          <h4 class="subscribe-title">S/.79.99</h4>
          <ul>
            <li><p class="subscribe-text">Entre 1 o 2 días a la semana.</li>
            <li><p class="subscribe-text">Limpieza del hogar</p></li>
            <li><p class="subscribe-text">Cocina</p></li>
            <li><p class="subscribe-text-negative">Lavandería</p></li>
            <li><p class="subscribe-text-negative">Paseo de mascotas</p></li>
          </ul>
          <a class="subscribe-btn" href="suscripcion">Suscribirme</a>
        </div>

        <div class="col-md-4 service-item">
          <h4 class="subscribe-subtitle">Cliente Platinio</h4>
          <h4 class="subscribe-title">S/.99.99</h4>
          <ul>
            <li><p class="subscribe-text">Entre 2 a 3 días a la semana.</p></li>
            <li><p class="subscribe-text">Limpieza del hogar</p></li>
            <li><p class="subscribe-text">Cocina</p></li>
            <li><p class="subscribe-text">Lavandería</p></li>
            <li><p class="subscribe-text">Paseo de mascotas</p></li>
          </ul>
          <a class="subscribe-btn" href="suscripcion">Suscribirme</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Sección galería
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Galería</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Te compartimos algunas fotos mostrando el servicio que brindamos.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria1.jpg);" href="">
            <div class="details">
              <h4>Limpieza</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria8.jpg);" href="">
            <div class="details">
              <h4>Cocina</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria3.jpg);" href="">
            <div class="details">
              <h4>Limpieza</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria6.jpg);" href="">
            <div class="details">
              <h4>Paseo de mascotas</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria4.jpg);" href="">
            <div class="details">
              <h4>Lavandería</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria2.jpg);" href="">
            <div class="details">
              <h4>Limpieza</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria7.jpg);" href="">
            <div class="details">
              <h4>Cocina</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(webSite/img/galeria5.jpg);" href="">
            <div class="details">
              <h4>Lavandería</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

 
  <!--==========================
  Sección equipo domestik
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nuestro Equipo</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Acontinuación te presentamos a los responsables de este proyecto</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{asset('webSite/img/team-1.jpg')}}" alt=""></div>
            <h4>Gerson Oliva</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{asset('webSite/img/team-2.jpg')}}" alt=""></div>
            <h4>Milagros Sánchez</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{asset('webSite/img/team-3.jpg')}}" alt=""></div>
            <h4>Brayan Oliva</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{asset('webSite/img/team-4.jpg')}}" alt=""></div>
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Seccción contáctanos
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contáctanos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Envíanos alguna duda o consulta y te responderemos a la brevedad posible.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Av. Bolivar #2054<br>Lambayeque, Perú</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>serviciosdomestik@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+51 969 281 666</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

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
