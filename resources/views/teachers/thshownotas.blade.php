@extends('layouts.thmenu')
 @section('content')
 <table class="table">
  <thead>
   <th>Nombres</th>
   <th>Grado</th>
   <th>unit</th>
   <th>clase</th>
  </thead>
  @foreach($users as $user)
   <tbody>
    <td>{{$user->firstname}}</td>
    <td>{{$user->grade}}</td>
    <td>{{$user->unit}}</td>
    <td>{{$user->class}}</td>
    <td>
    </td>
   </tbody>
  @endforeach
 </table>
 @endsection