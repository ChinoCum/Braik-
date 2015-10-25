@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible" role="alert">

  		<ul>
  			@foreach($errors->all() as $error)
  			@endforeach
  		</ul>
  	</div>
@endif
