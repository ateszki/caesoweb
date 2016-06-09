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
                <h4> Usuario de consulta: <b>{{Auth::user()->name}}</b> - <a href="{{URL::to('auth/logout')}}" >Salir de modo consulta</a></h4>
                <div class="form-gorup"><form method="get"><input type="text" placeholder="Buscar por nombre o puesto o localidad, etc" name="term" value="{{$term}}" class="form-control"><button type="submit" class="btn btn-primary">Buscar</button></form></div>
            </div>

            <div class="row">
                        <div class="col-sm-12">
			                <div class="table-responsive">
							  <table class="table">
							    <thead>
							    	<tr>
							    		<th>#</th>
							    		<th>Nombre</th>
							    		<th>Puesto</th>
							    		<th>Edad</th>
							    		<th>Localidad</th>
							    		<th>Provincia</th>
							    		<th>&nbsp;</th>
							    	</tr>
							    </thead>
							    <tbody>
							    @foreach($cvs as $cv)
							    <tr>
							    	<td>{{$cv->id}}</td>
							    	<td>{{$cv->nomap}}</td>
							    	<td>{{$cv->puesto}}</td>
							    	<td>{{$cv->edad}}</td>
							    	<td>{{$cv->localidad}}</td>
							    	<td>{{$cv->provincia}}</td>
							    	<td><a class="btn btn-primary" href="{{URL::to('bolsa-de-trabajo/consulta/')."/".$cv->id}}">detalle</a></td>
							    </tr>
							    @endforeach
							    </tbody>
							  </table>
                              {!! $cvs->render() !!}
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
