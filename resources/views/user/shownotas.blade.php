@extends('layouts.menu')
 @section('content')
 <table class="table">
  <thead>
   <th>Clase</th>
   <th>Unidad</tH>
   <th>Notas Especifica</th>
  </thead>
  @foreach($users as $user)
   <tbody>
    <td>{{$user->cod_class}}</td>
    <td>{{$user->unit}}</td>
    <td>{{$user->notas_especificas}}</td>
    <td>
    </td>
   </tbody>
  @endforeach
 </table>
 @endsection