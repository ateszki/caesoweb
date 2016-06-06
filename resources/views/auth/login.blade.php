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
                <h2 class="section-title wow fadeInDown">Ingreso a la bolsa de trabajo en modo consulta.</h2>
            </div>

            <div class="row">
                        <div class="col-sm-12">
			                <form method="POST" action="/auth/login">
							    {!! csrf_field() !!}

							    <div class="form-group">
							        <label>Email</label>
							        <input  class="form-control" type="email" name="email" value="{{ old('email') }}">
							    </div>

							    <div class="form-group">
							        <label>Password</label>
							        <input  class="form-control" type="password" name="password" id="password">
							    </div>

							    <div class="form-group">
							        <button class="btn  btn-default"" type="submit">Ingresar</button>
							    </div>
							</form>
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
