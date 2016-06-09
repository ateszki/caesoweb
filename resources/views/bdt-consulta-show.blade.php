<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bolsa de trabajo | Consulta | CAESO | Cámara Argentina de Empresas de Servicios Odontológicos</title>
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
                
                
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    
    <section id="adhesion">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Bolsa de Trabajo - Consultas</h2>
            </div>

            <div class="row">
                        <div class="col-sm-12 well">
                            <h3>{{$cv->nomap}} </h3>
                            <h6>Ingreso {{$cv->created_at->format('d/m/Y')}}</h6>
			                <div class="col-sm-6">
                                <div class="form-group"><label>Puesto:</label><div> {{$cv->puesto}}</div> </div> 
    					    	<div class="form-group"><label>Fecha Nac.:</label><div> {{$cv->fecha_nacimiento->format('d/m/Y')}}</div> </div> 
    					    	<div class="form-group"><label>Edad:</label><div> {{$cv->edad}}</div> </div> 
                                <div class="form-group"><label>DNI:</label><div> {{$cv->dni}}</div> </div> 
                                <div class="form-group"><label>LinkeIn:</label><div> <a href="{{$cv->linkedin}}" target="_blank">{{$cv->linkedin}}</a></div> 
                                </div>
                                <div class="form-group"><label>CV Adjunto:</label><div> <a href="{{URL::to('curriculum/'.$cv->id.'/descargar')}}" target="_blank">Descargar/Ver</a></div> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label>Domicilio:</label><div> {{$cv->domicilio}}</div> </div> 
                                <div class="form-group"><label>Localidad:</label><div> {{$cv->localidad}}</div> </div> 
    					    	<div class="form-group"><label>Provincia:</label><div> {{$cv->provincia}}</div> </div> 
                                <div class="form-group"><label>e-mail:</label><div> <a href="mailto:{{$cv->email}}">{{$cv->email}}</a></div> </div> 
                                <div class="form-group"><label>Teléfono:</label><div> {{$cv->telefono}}</div> </div> 
                                <div class="form-group"><label>Celular:</label><div> {{$cv->celular}}</div> </div> 
					       </div>
                        </div>
            </div>
        </div>
    </section>

    <!--/#bottom-->

    @include('footer')


    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
