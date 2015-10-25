@extends('layouts.thmenu')
 @section('content')
 <table class="table">
  <thead>
   <th>Nombres</th>
   <th>Grado</th>
   <th>Seccion</th>
   <th>Acciones</th>
  </thead>
  @foreach($users as $user)
   <tbody>
    <td>{{$user->firstname}}</td>
    <td>{{$user->grade}}</td>
    <td>{{$user->section}}</td>
    <td>
     {!!link_to_route('notes.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);
     !!}
    </td>
   </tbody>
  @endforeach
 </table>
 @endsection