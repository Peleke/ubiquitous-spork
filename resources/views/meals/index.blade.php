@extends('layouts.app')

@section('content')
@if (!$meals->isEmpty())

	<p>Here's everything you've eaten so far.</p>

	<ul class="list-group">
	@foreach ($meals as $meal)
		<li class="list-group-item">
			<a href="/meals/{{ $meal->id }}">{{ $meal->name }} </a>
			<span class="pull-right">{{ $meal->created_at->format('g:i A \o\n l, F jS') }}</span>
		</li>
	@endforeach
	</ul>
@else
	<p>Seems like you've never eaten anything. What a bummer&emm;<a href="/meals/create">why not change that</a>?
@endif
@stop