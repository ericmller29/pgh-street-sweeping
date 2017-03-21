@extends('base')
@section('header_class', 'homepage')

@section('header')
    <div class="search">
        <h2 class="text-center">Find out your street sweeping <span>schedule</span></h2>
        <p class="text-center">Search for your neighborhood, or street. If you can't find your location you can always <a href="#" alt="Add your neighborhood or street">add it</a>.
        <div class="form-input homepage-search">
            <label for="query" class="hidden">Neighborhood or street name</label>
            <input type="text" name="query" id="query" placeholder="Neighborhood or street name" autocomplete="off">
            <button type="submit" class="btn">
                <i class="fa fa-search"></i>
                Search
            </button>
        </div>
    </div>

@endsection
@section('content')

@endsection
