@extends('base')

@section('content')
	<div class="container level">
		<h2>{{ $hood->name }}</h2>
		<nav class="breadcrumbs">
			<a href="{{ url('/') }}" alt="Go home"><i class="fa fa-home"></i></a>
			<span class="sep">></span>
			<a href="{{ url('schedule') }}" alt="Back to schedule">Schedule</a>
			<span class="sep">></span>
			<span>{{ $hood->name }}</span>
		</nav>
	</div>
@endsection