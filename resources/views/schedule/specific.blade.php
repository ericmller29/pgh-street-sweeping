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
		<div class="streets">
			<p class="none-found text-center">
				No streets found, help us out won't you and <a href="#">add one</a>?
			</p>
			<section class="street">
				<h3>Foreland St.</h3>
			</section>
			<section class="street">
				<h3>Foreland St. 2</h3>
			</section>
			<section class="street">
				<h3>Foreland St. 3</h3>
			</section>
			<section class="street">
				<h3>Foreland St. 4</h3>
			</section>
		</div>
	</div>
@endsection