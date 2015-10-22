@foreach($users as $user)
    <td>{{$user->firstname}}</td>
    <td>{{$user->grade}}</td>
    <td>{{$user->section}}</td>	
@endforeach