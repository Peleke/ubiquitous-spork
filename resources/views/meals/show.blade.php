@extends('layouts.app')

@section('content')
<div class="meal-info">
	<h2 class="meal-name">{{ $meal->name }}</h2>
	<span class="meal-time">{{ $meal->created_at->format('l, F jS') }}</span>

	<hr>

	<h3>Foods</h3>
	@if (!$meal->foods->isEmpty())
		<ul class="list-group">
			@foreach($meal->foods as $food)
				<li class="list-group-item">
					{{ $food->name }}
					
					<span class="food-pcf pull-right">{{ $food->protein}}:{{ $food->carbohydrates }}:{{ $food->fat }}</span>
				</li>
			@endforeach
		</ul>
	@else
		<p>No Foods associated with this meal. Scroll down to add some.</p>
	@endif

	<hr>

	<form action="/meals/{{ $meal->id }}/foods" method="post">

		{{ csrf_field() }}

		<div class="form-group-row">
			<label for="name" class="col-sm-2 form-control-label">Food Name</label>
			<div class="col-sm-10">
				<input class="form-control" type="text" name="name" placeholder="Food Name">
			</div>
		</div>

		<div class="form-group-row">
			<label for="protein" class="col-sm-2 form-control-label">Protein</label>
			<div class="col-sm-10">
				<input class="form-control" type="number" name="protein" placeholder="Protein/g">
			</div>
		</div>

		<div class="form-group-row">
			<label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
			<div class="col-sm-10">
				<input class="form-control" type="number" name="carbohydrates" placeholder="Carbohydrates/g">
			</div>
		</div>

		<div class="form-group-row">
			<label for="fat" class="col-sm-2 form-control-label">Fat</label>
			<div class="col-sm-10">
				<input class="form-control" class="form-control" type="number" name="fat" placeholder="Fat/g">
			</div>
		</div>

		<div class="form-group-row">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-primary" value="submit" type="submit">Submit</button>
			</div>
		</div>

	</form>

</div>

@stop
