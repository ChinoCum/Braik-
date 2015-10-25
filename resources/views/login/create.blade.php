@extends('layouts.menu')
	@section('content')
	 <div class="title">@include('alerts.success')</div>
	

	{!!Form::open(['route'=>'notes.store', 'method'=>'POST'])!!}
@include('alerts.errors')	
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
	<div class="form-group">
		{!!Form::label('grade','Grado:')!!}
		<br>
		{!!Form::select('grade', ['','Primero A',
			'Primero B',
			'Primero C',
			'Primero D',
			'Segundo A',
			'Segundo B',
			'Segundo C',
			'Segundo D',
			'Tercero A',
			'Tercero B',
			'Tercero C',
			'Tercero D',
			'Cuarto	A',
			'Cuarto	B',
			'Cuarto	C',
			'Cuarto	D',
			'Quinto	A',
			'Quinto	B',
			'Quinto	C',
			'Quinto	D',
			'Sexto A',
			'Sexto B',
			'Sexto C',
			'Sexto D',
			'Primero Basico	A',
			'Primero Básico	B',
			'Primero Basico	C',
			'Primero Básico	D',
			'Segundo Básico	A',
			'Segundo Básico	B',
			'Segundo Básico	C',
			'Segundo Básico	D',
			'Tercero Básico	A',
			'Tercero Básico	B',
			'Tercero Básico	C',
			'Tercero Básico	D',
			'Cuarto Bachillerato A',
			'Cuarto Bachillerato B',
			'Cuarto Bachillerato C',
			'Cuarto Bachillerato D',
			'Quinto Bachillerato A',
			'Quinto Bachillerato B',
			'Quinto Bachillerato C',
			'Quinto Bachillerato D',]) !!}
	</div>
	<div class="form-group">
		{!!Form::label('schools','Colegio:')!!}
		<br>
		{!!Form::select('schools', ['','Colegio Salesiano Don Bosco']) !!}
	</div>


</diV>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
