<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!!Html::style('css/jquery.bxslider.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/MisEstilos.css')!!}
    <style type="text/css">
        body{
             background: url("../images/club-fondo_phixr.jpg") no-repeat center center fixed; 
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
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                                {!! csrf_field() !!}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-refresh"></i>Reset Password
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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