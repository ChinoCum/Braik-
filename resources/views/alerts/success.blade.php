@if(Session::has('message-success'))
<!--<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message-error')}}
</div>
-->
<h1 class="text-center login-title">Se ha creado un Nuevo Usuario</h1>
@endif
