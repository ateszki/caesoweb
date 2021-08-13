<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CAESO | Cámara Argentina de Empresas de Servicios Odontológicos</title>
    <!-- core CSS -->
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/main.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{URL::to('js/html5shiv.js')}}"></script>
    <script src="{{URL::to('js/respond.min.js')}}"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{URL::to('images/ico/favicon.ico')}}?v=2">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('images/ico/apple-touch-icon-57-precomposed.png')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('images/caeso-marca.pn')}}g" alt="CAESO"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Inicio</a></li>
                        <li class="scroll"><a href="#caeso">Caeso</a></li>
                        <li class="scroll"><a href="#integrantes">Integrantes</a></li>
                        <li class="scroll"><a href="#autoridades">Autoridades</a></li>
                        <li class="scroll"><a href="#contacto">Contacto</a></li>                        
                        <li class="scroll"><a href="#adhesion">Adhesión</a></li>  
                        <li class="scroll"><a href="{{URL::to('bolsa-de-trabajo')}}">Bolsa de trabajo</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

   <!--div id="dia-odontologo" onclick="$('#dia-odontologo').fadeOut('slow');" class="container" style="position:absolute;width:100%;background-color:white;z-index:100">
            <img src="images/CAESO-Feliz2021_.png" width="100%"  align="center">
        </div-->
        
    <section id="main-slider">
        <div @if(count($noticias)>1) class="owl-carousel" @endif>
            @foreach($noticias as $noticia)
            <div class="item" style="background-image: url({{URL::to('noticias'.'/'.$noticia->id.'/imagen')}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>{!!$noticia->titulo!!}</h2>
                                    <p>{{$noticia->bajada}}</p>
                                    <a class="btn btn-primary btn-lg" href="{{URL::to('noticias').'/'.$noticia->slug}}">Seguir leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            @endforeach
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <!--/#about-->
    <section id="caeso">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Cámara Argentina de Empresas de Servicios Odontológicos</h2>
                <p class="wow fadeInDown">Representa a las empresas más importantes de la Argentina que atienden en conjunto a más de tres millones de beneficiarios del Sistema de Salud, tanto de Obras Sociales como de la Medicina Prepaga.</p>
            </div>

            <div class="row">
                
                <div class="col-sm-4 wow fadeInRight">
                    <h3 class="column-title">VISIÓN</h3>
                    <p>La prestación de servicios odontológicos requiere un marco de responsabilidad y libertad que permita la plena generación de resultados de excelencia, con absoluto respeto por los intereses de todos los participantes.</p>
                </div>
                <div class="col-sm-4 wow fadeInRight">
                    <h3 class="column-title">MISIÓN</h3>
                    <p>Generar un espacio donde las empresas de servicios odontológicos puedan potenciar sus capacidades e incrementar tanto su solidez como su compromiso con la sociedad.</p>
                </div>
                <div class="col-sm-4 wow fadeInRight">
                    <h3 class="column-title">VALORES</h3>
                    <p>Creemos en las capacidades individuales, en la libertad de trabajo, en los compromisos morales y en la genuina solidaridad humana. </p>
                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="integrantes" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Empresas Integrantes</h2>
            </div>

            <div class="row">
                <!--
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.alphaomega.com.ar" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-alphaomega.png')}}" alt="Alpha Omega"></a>
                        </div>
                    </div>
                </div>
            -->
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.apo.com.ar" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-apo.png')}}" alt="APO"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.consulmed.com.ar" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-consulmed.png')}}" alt="Consulmed"></a>
                        </div>
                    </div>
                </div>
                <!-- 
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.corden.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-corden.png')}}" alt="Corden"></a>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.dentalsystem.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-dentalsystem.png')}}" alt="Dental System"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.mbodontologia.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-mb.png')}}" alt="MB"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://www.medicus.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-medicus.png')}}" alt="Medicus"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.amasis.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-ceo.png')}}" alt="Amasis">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.opsa.com" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-opsa.png')}}" alt="OPSA"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.siaco.com.ar" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-siaco.png')}}" alt="SIACO"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.socdus.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-socdus.png')}}" alt="SOCDUS"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="{{URL::to('logos/integrantes-stleger.png')}}" alt="St. Leger">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.tcmaxonline.com/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-tcmax.png')}}" alt="TC Max"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="http://www.cooldent.com.ar/" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-cooldent.png')}}" alt="CoolDent"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://www.swissmedical.com.ar" target="_blank"><img class="img-responsive" src="{{URL::to('logos/integrantes-swissmedical.png')}}" alt="Swiss Medical"></a>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://www.proi-odontologia-integral.com/" target="_blank">
                                <img class="img-responsive" src="{{URL::to('logos/integrantes-proi.png')}}" alt="PROI"></a>
                        </div>
                    </div>
                </div>
                -->
                <!--
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://www.gmlsi.com" target="_blank">
                                <img class="img-responsive" src="{{URL::to('logos/integrantes-klasmile.png')}}" alt="Klasmile Odontología"></a>
                        </div>
                    </div>
                </div>
                -->
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://sonrisasargentinas.com.ar/" target="_blank">
                                <img class="img-responsive" src="{{URL::to('logos/integrantes-sonrisasargentinas.png')}}" alt="Sonrisas Argentinas"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="integrante wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <a href="https://www.facebook.com/ODONTOLOGIAIEFAL/" target="_blank">
                                <img class="img-responsive" src="{{URL::to('logos/integrantes-efal.png')}}" alt="Efal Odontología"></a>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="autoridades">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Autoridades</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-info">
                            <h3>Dr.<br>Carlos Nápoli</h3>
                            <span>Presidente</span>
                        </div>
                        <p>OPSA</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-info">
                            <h3>Dr.<br>Oscar Polignano</h3>
                            <span>Vicepresidente</span>
                        </div>
                        <p>SIACO</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-info">
                            <h3>Lic.<br>Guillermo Nervi</h3>
                            <span>Secretario</span>
                        </div>
                        <p>Consulmed</p>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-info">
                            <h3>Cont.<br>Claudia Tuozzo</h3>
                            <span>Prosecretario</span>
                        </div>
                        <p>Amasis</p>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Cont.<br>Ezequiel Basílico</h3>
                            <span>Tesorero</span>
                        </div>
                        <p>Dental System</p>
                    </div>
                </div>
                <!--
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Dr.<br>Antonio Cumini</h3>
                            <span>Protesorero</span>
                        </div>
                        <p>Corden</p>
                    </div>
                </div>
                -->
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Dra.<br>Elida Cosentino</h3>
                            <span>Vocal Titular</span>
                        </div>
                        <p>St Leger</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Sra.<br>Ofelia García</h3>
                            <span>Vocal Titular</span>
                        </div>
                        <p>Socdus</p>
                    </div>
                </div>
                

                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Dr.<br>Mariano Villarino</h3>
                            <span>Vocal Titular</span>
                        </div>
                        <p>APO</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Dr.<br>Edgardo González</h3>
                            <span>Vocal Suplente</span>
                        </div>
                        <p>Efal Odontología</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Dr.<br>Gastón Miñones</h3>
                            <span>Vocal Suplente</span>
                        </div>
                        <p>Cooldent</p>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Cont.<br>Marcelo De Stéfano</h3>
                            <span>Revisor de Ctas. Titular</span>
                        </div>
                        <p>Pampaz</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <h3>Cont.<br>Maximiliano Leiva</h3>
                            <span>Revisor de Ctas. Suplente</span>
                        </div>
                        <p>Swiss Medical</p>
                    </div>
                </div>
            </div>

            
        </div>
    </section><!--/#meet-team-->

  

    <section id="contacto">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Contacto</h2>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="map" style="height:650px;background:url(http://www.caeso.com.ar/images/mapa_caeso.png) top center no-repeat;background-size:cover"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="contact-form">
                            <h3>Información de contacto</h3>

                            <address>
                              <strong>Caeso</strong><br>
                              Av.Córdoba 836 Piso 1 Of.106 <br>
                              Ciudad Autónoma de Buenos Aires, C1054AAU<br>
                              <abbr title="Phone">T:</abbr> (011) 43287103
                            </address>
                           <!-- @if($errors->any())
                            <div class=" alert alert-danger">{{$errors->first()}}</div>
                            @endif

                            @if (session('exito'))
                                <div class="alert alert-success">
                                    {{ session('exito') }}
                                </div>
                            @else-->
                            <form id="main-contact-form" name="contact-form" action="{{URL::to('contacto')}}" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="mensaje" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="adhesion">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Solicitud de adhesión a la cámara.</h2>
            </div>

            <div class="row">
                        <div class="col-sm-12">
                            <form id="main-adhesion-form" name="adhesion-form" action="{{URL::to('adhesion')}}" method="POST">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="razon_social" class="form-control" placeholder="Razón Social" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="IVA" class="form-control" placeholder="Categoría fiscal (R. Inscripto, Exento, etc)" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cuit" class="form-control" placeholder="CUIT" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="responsable" class="form-control" placeholder="Nombre de la persona responsable" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cargo" class="form-control" placeholder="Cargo o función" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="domicilio" class="form-control" placeholder="Domicilio" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="web" class="form-control" placeholder="Sitio web" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cantidad_sillones" class="form-control" placeholder="Cantidad de sillones" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="recomendado_por" class="form-control" placeholder="Socio de CAESO que lo recomienda" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
            </div>
        </div>
    </section>

    <!--/#bottom-->

    @include('footer')


    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('js/mousescroll.js')}}"></script>
    <script src="{{URL::to('js/smoothscroll.js')}}"></script>
    <script src="{{URL::to('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::to('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.inview.min.js')}}"></script>
    <script src="{{URL::to('js/wow.min.js')}}"></script>
    <script src="{{URL::to('js/main.js')}}"></script>
</body>
</html>
