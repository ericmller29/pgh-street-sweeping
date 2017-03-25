@extends('base')

@section('content')
	<schedule inline-template>
		<div class="container level">
			<div class="main-content">
				<h2>Street Sweeping Schedule</h2>
				<p>First select the neighborhood you're trying to find the schedule for. If you do not see your neighborhood please <a href="#" alt="Add your neighborhood!">add it</a>!</p>
				<div class="form-input with-margin-bottom with-icon-right with-border">
					<label for="filter" class="hidden">Filter Neighborhoods</label>
					<input type="text" name="filter" id="filter" placeholder="Find your neighborhood" v-model="keyword">
					<i class="fa fa-search"></i>
				</div>
				<p class="no-results text-center" v-if="filter(hoods).length === 0" v-cloak>
					We couldn't find this neighborhood or any like it. Could you help us out and <a href="#">add it</a>?
				</p>
				<ul class="neighborhood-list" v-cloak>
					<li v-for="hood in filter(hoods)" v-cloak>
						<a v-bind:href="'/schedule/' + hood.slug">
							@{{ hood.name }}
							<i class="fa fa-chevron-right"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="sidebar">
				<div class="advert"></div>
			</div>
		</div>
	</schedule>
@endsection