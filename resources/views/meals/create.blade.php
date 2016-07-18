@extends('layouts.app')

@section('content')
<form action="/users/{{ $user->id}}/meals" method="POST">
	
	{{ csrf_field() }}

	<fieldset class="form-group form-inline">
		<label for="name">Name</label>
		<input name="name" type="text" class="form-control" placeholder="Meal Name">
	</fieldset>

	<button type="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
@stop
