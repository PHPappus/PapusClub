<!DOCTYPE html>
<html>
<head>
    <title>Papus Login</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!!Html::style('css/jquery.bxslider.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/MisEstilos.css')!!}
    <style type="text/css">
        body{
             background: url("images/club-fondo_phixr.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
    
</head>

<body >

<!---Cuerpo -->

<main class="main">
    <div class="content" style="max-width: 100%;">
        <br/><br/><br/>
        <br/><br/><br/>
        <br/><br/><br/>
        <br/><br/><br/>

        <div class="container">
            @include('alerts.errors')
            @include('alerts.request')
            

            <!-- <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="lead label-bg"><strong>LOGIN</strong></p>
                </div>
            </div> -->
        </div>
        <div class="container" style="max-width:1200px">
            <div class="panel panel-default panel-login-box">
                <div class="panel-heading lead text-center" style="color: gray"><strong>P A P U S &nbsp C L U B &nbsp - &nbsp L O G I N &nbsp; <p class="glyphicon glyphicon-user"></p></strong></div>
                <div class="panel-body">
                    <br/><br/><br/>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-2 col-sm-offset-2 lead" style="color: black"><strong>Usuario:</strong></label>

                                    <div class="col-md-5">
                                        <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-2 col-sm-offset-2 lead" style="color: black"><strong>Contraseña:</strong></label>

                                    <div class="col-md-5">
                                        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label style="color: #D8D8D8; font-size: large">
                                                <input type="checkbox" name="remember"> <strong>Remember Me</strong> 
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            <i class="fa fa-btn fa-sign-in"></i> Login
                                        </button>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                            <a href="{{URL::previous()}}" class="btn btn-lg btn-primary" role="button" style="height: 45px">Regresar</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8 text-center">
                                <a class="btn btn-link login-links" href="{{ url('/password/reset') }}"><strong>¿No recuerdas tu contraseña?</strong></a>          
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-8 text-center">
                                <a class="btn btn-link login-links" href="#"><strong>Crear Contraseña (Nuevo Asociado)</strong></a>
                            </div>  
                        </div>
                        <br/>
                        <br/>
                                

    </div>      
        </div>
    </div>
</main>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    {!!Html::script('js/jquery-1.11.3.min.js')!!}
    {!!Html::script('js/bootstrap.js')!!}
    {!!Html::script('js/jquery.bxslider.min.js')!!}
    {!!Html::script('js/MisScripts.js')!!}


<!-- JQuery -->
    <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
    <!-- Bootstrap -->
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
    <!-- BXSlider -->
    <!-- <script src="js/jquery.bxslider.min.js"></script> -->
    <!-- Mis Scripts -->
    <!-- <script src="js/MisScripts.js"></script> -->
</body>
</html>