<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bolsa de trabajo | CAESO | Cámara Argentina de Empresas de Servicios Odontológicos</title>
    <!-- core CSS -->
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
                        <li class="scroll"><a href="{{URL::to('/')}}">Inicio</a></li>
                        <li class="scroll"><a href="{{URL::to('/')}}#caeso">Caeso</a></li>
                        <li class="scroll"><a href="{{URL::to('/')}}#integrantes">Integrantes</a></li>
                        <li class="scroll"><a href="{{URL::to('/')}}#autoridades">Autoridades</a></li>
                        <li class="scroll"><a href="{{URL::to('/')}}#contacto">Contacto</a></li>                        
                        <li class="scroll"><a href="{{URL::to('/')}}#adhesion">Adhesión</a></li> 
                        <li class="scroll active"><a href="{{URL::to('bolsa-de-trabajo')}}">Bolsa de trabajo</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    
    <section id="adhesion">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title wow fadeInDown">Solicitud de ingreso a la bolsa de trabajo.</h2>
                <p>La bolsa de trabajo está orientada a odontologos, profesionales y empleados de clínicas odontológicas.</p>
            </div>

            <div class="row">
                        <div class="col-sm-12">
                            @if($mensaje)
                            <div class="alert alert-success" role="alert">Muchas gracias por enviar sus datos a nuestra bolsa de trabajo. Los mismos ya están disponibles para las empresas integrantes de Caeso y serán incluídos en sus búsquedas de recursos humanos.</div>
                            @else

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="main-bolsa-form" name="bolsa-form" action="{{URL::to('bolsa-de-trabajo')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="panel panel-primary">
                                  <div class="panel-heading"><h3 class="panel-title">Datos personales</h3></div>
                                  <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required value="{{ old('nombre') }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{ old('apellido') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="dni" class="form-control" placeholder="Número de DNI" value="{{ old('dni') }}" required>
                                        </div>
                                        <div class="form-group">
                                                <input type='text' value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" id='datetimepicker1' placeholder="Fecha de nacimiento AAAA-MM-DD ej: 1983-12-31" required class="form-control" />
                                                
                                        </div> 
                                        <div class="form-group">
                                            <select class="form-control" name="puesto">
                                                <option value="">Categoría</option>
                                                @foreach($puestos as $puesto)
                                                <option value="{{$puesto}}">{{$puesto}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                <div class="panel panel-primary">
                                  <div class="panel-heading"><h3 class="panel-title">Domicilio</h3></div>
                                  <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" value="{{ old('domicilio') }}" name="domicilio" class="form-control" placeholder="Domicilio" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ old('localidad') }}" name="localidad" class="form-control" placeholder="Localidad" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="provincia">
                                                <option value="">Provincia</option>
                                                @foreach($provincias as $provincia)
                                                <option value="{{$provincia->state}}">{{$provincia->state}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                  </div>
                                  </div>
                                  <div class="panel panel-primary">
                                  <div class="panel-heading"><h3 class="panel-title">Vías de contacto</h3></div>
                                  <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" value="{{ old('telefono') }}" name="telefono" class="form-control" placeholder="Teléfono" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ old('celular') }}" name="celular" class="form-control" placeholder="Celular" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                   </div>
                                   </div>
                                   <div class="panel panel-primary">
                                  <div class="panel-heading"><h3 class="panel-title">Referencias</h3></div>
                                  <div class="panel-body">
                                        <div class="form-group">
                                            <input type="text" value="{{ old('linkedin') }}" name="linkedin" class="form-control" placeholder="Link a perfil de LinkedIn" required>
                                        </div>
                                        <div class="form-group">
                                        <label class="btn btn-warning btn-file">
                                            CV en formato doc o pdf <input type="file" accept=".doc,.docx,.pdf" name="cv" style="display: none;" required>
                                        </label>
                                        </div>
                                  </div>
                                  </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                            @endif
                        </div>
            </div>
        </div>
    </section>

    <!--/#bottom-->

    @include('footer')


    <script src="{{URL::to('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('js/mousescroll.js')}}"></script>
    <script src="{{URL::to('js/smoothscroll.js')}}"></script>
    <script src="{{URL::to('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::to('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.inview.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{URL::to('js/wow.min.js')}}"></script>
    <script src="{{URL::to('js/main.js')}}"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({viewMode: 'years',
                format: 'YYYY-MM-DD'});
            });
        </script>
</body>
</html>
