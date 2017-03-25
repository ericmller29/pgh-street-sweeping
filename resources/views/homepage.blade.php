@extends('base')
@section('header_class', 'homepage')

@section('header')
    <hood-search inline-template>
        <div class="search">
            <div class="search-bg">
                <h2 class="text-center">Find out your street sweeping <span>schedule</span></h2>
                <p class="text-center">Search for your neighborhood, or street. If you can't find your location you can always <a href="#" alt="Add your neighborhood or street">add it</a>.</p>
                <div class="form-input homepage-search">
                    <label for="query" class="hidden">Neighborhood or street name</label>
                    <input type="text" name="query" id="query" placeholder="Neighborhood or street name" autocomplete="off"
                        v-on:keyup="search"
                        v-model="query">
                    <button type="submit" class="btn">
                        <i class="fa fa-search"></i>
                        Search
                    </button>
                </div>
            </div>
            <ul class="inline-results" v-bind:class="{ active: searching }">
                <li class="loader text-center" v-if="showLoader">
                    <img src="{{ asset('images/spinner.gif') }}">
                </li>
                <li class="text-center no-results" v-if="noResults">
                    No neighborhoods found, please help us out and <a href="#">add one</a>!
                </li>
                <li v-for="hood in results">
                    <a href="#">@{{ hood.name }}</a>
                </li>
            </ul>
        </div>
    </hood-search>
@endsection
@section('content')

@endsection
