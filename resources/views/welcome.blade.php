@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            @if (!is_null($user))
                <div class="panel-heading">Welcome, {{ $user->name }}!</div>

                <div class="panel-body">
                    @if (!$user->meals->isEmpty())
                        @foreach ($user->meals as $meal)
                        @endforeach
                    @else
                        <p>Looks like you haven't eaten anything today. <a href="/meals/create">You should change that.</a>
                    @endif
                </div>
            @else
                <div class="panel-heading">Welcome, Stranger!</div>

                <div class="panel-body">
                <a href="/login">Login</a> or <a href="/register">register</a> to get started!
                </div>
            @endif


            </div>
        </div>
    </div>
</div>
@endsection
