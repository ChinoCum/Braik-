<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
{!!Html::style('assets/css/login.css')!!}
{!!Form::open(['route' => 'log.store', 'method' => 'POST','class'=>'form-signin'])!!}
<!--NAV BAR-->
<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Login</span></a></li>
   <li><a href='#'><span>Quienes Somos</span></a></li>
   <li><a href='#'><span>Equipo</span></a></li>
   <li><a href='#'><span>Contacto</span></a></li>
</ul>
</div>
<!--NAV BAR-->
<!--LOGIN FORM-->
<div class="login-block">
	<div class="logo"><img src="/assets/images/logo2.png"></div>
	<br>
 		@include('alerts.errors')
                        @include('alerts.request')
                        @if($errors->has())
                        @if($errors->has('username'))
                                <h1 class="text-center login-title">{{$errors->first('username')}}</h1>
                            @endif
                        @if($errors->has('password'))
                                <h1 class="text-center login-title">{{$errors->first('password')}}</h1>
                            @endif
                        @endif
                    {!!Form::text('username',null,['id'=>'username','placeholder'=>'Usuario'])!!}
                    {!!Form::password('password',['id'=>'password','placeholder'=>'Contraseña'])!!}
                    {!!Form::submit('Iniciar Sesion',['class'=>'button'])!!} 
</div>
<!--LOGIN FORM-->
{!!Form::close()!!}