@extends('layouts.app')

@section('content')
<div class="meal-info">
	<h2 class="meal-name">{{ $meal->name }}</h2>
	<span class="meal-time">{{ $meal->created_at->format('l, F jS') }}</span>
	<hr>
	<h3>Foods</h3>
	@if (!is_null($meal->foods))
		<ul class="list-group">
			@foreach($foods as $food)
				<li class="list-group-item">
					{{ $food->name }}
					<span class="food-pcf">P:C:F</span>
				</li>
			@endforeach
		</ul>
	@else
		<p>No Foods associated with this meal. Scroll down to add some.</p>
	@endif
</div>
@stop