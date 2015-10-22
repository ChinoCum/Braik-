@extends('layouts.menu')
<?php $message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado exitosamente
</div>
@endif
	@section('content')
	<table class="table">
		<thead>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Usario</th>
			<th>Contraseña</th>
			<th>Curso</th>
			<th>Colegio</th>
			<th>Email</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->firstname}}</td>
				<td>{{$user->lastname}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->password}}</td>
				<td>{{$user->cod_curso}}</td>
				<td>{{$user->id_school}}</td>
				<td>{{$user->email}}</td>
				<td>
					{!!link_to_route('notes.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);
					!!}
				</td>
			</tbody>
		@endforeach
	</table>
	@endsection
