
@extends('layout')

{{-- eta dynamic content --}}
@section('content')
@include('partials._search')

<h2> {{ $listing['title'] }} </h2>
<p> {{ $listing['description'] }} </p>

@endsection
