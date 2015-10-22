@extends('layouts.menu')
	@section('content')

	{!!Form::open(['route'=>'notes.store', 'method'=>'POST'])!!}
<div class="form">
	<div class="form-group">
		{!!Form::label('first','Nombre:')!!}
		{!!Form::text('first',null,['class'=>'form-control','placeholder'=>'Ingresa los Nombres del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('last','Apellidos:')!!}
		{!!Form::text('last',null,['class'=>'form-control','placeholder'=>'Ingresa los Apellidos del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('username','Usuario:')!!}
		{!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del usuario'])!!}
	</div>
</diV>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
