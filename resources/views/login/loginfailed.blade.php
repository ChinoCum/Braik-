@extends('layouts.login')

@section('content')
{!!Form::open(['action' => 'NotesController@login', 'class'=>'form-signin'])!!}
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">WOW SUCH BETTER MUCH WOW</h1>
            <div class="account-wall">
                <img class="profile-img" src="../assets/images/logo.jpg"
                    alt="">
                     <h1 class="text-center login-title">El Usuario o Contraseña no es Correcta.</h1>
                        @if($errors->has())
                        @if($errors->has('username'))
                                <h1 class="text-center login-title">{{$errors->first('username')}}</h1>
                            @endif
                        @if($errors->has('password'))
                                <h1 class="text-center login-title">{{$errors->first('password')}}</h1>
                            @endif
                        @endif
                    {!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
                <br>
                <br>
                {!!Form::submit('Login',['class'=>'btn btn-lg btn-primary btn-block'])!!}   
            </div>

        </div>
    </div>
</div>

{!!Form::close()!!}

@stop