@extends('base')

@section('content')
	<div class="container level">
		<h2>Street Sweeping Schedule</h2>
		<p>First select the neighborhood you're trying to find the schedule for. If you do not see your neighborhood please <a href="#" alt="Add your neighborhood!">add it</a>!</p>
		<div class="form-input with-margin-bottom with-icon-right with-border">
			<label for="filter" class="hidden">Filter Neighborhoods</label>
			<input type="text" name="filter" id="filter" placeholder="Find your neighborhood">
			<i class="fa fa-search"></i>
		</div>
		<ul class="neighborhood-list">
			@foreach($hoods as $hood)
			<li>
				<a href="{{ url('/schedule/' . $hood->slug ) }}">
					{{ $hood->name }}

					<i class="fa fa-chevron-right"></i>
				</a>
			</li>
			@endforeach
		</ul>

		{{ $hoods->links() }}
	</div>
@endsection