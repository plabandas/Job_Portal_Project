
<!-- 

<?php foreach($listings as $listing): ?>
       <h2><?php echo $listing['title']?></h2>
       <p><?php echo $listing['description'] ?></p>
<?php endforeach; ?>

-->


<!--  For Using this blade : rename listings.blade.php in view folder -->

@extends('layout')

{{-- eta dynamic content --}}
@section('content')
@include('partials._hero')
@include('partials._search')

{{-- <div
     class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> --}}

@unless (count($listings) == 0)

@foreach($listings as $listing):

       {{-- <h2>
       <a href="/listings/{{$listing['id']}}">
        {{  $listing['title'] }}
       </a>
       </h2>
       <p> {{ $listing['description'] }} </p> --}}

 <x-listing-card :listing="$listing" />

@endforeach

@else
<p>No Listings Found</p>

@endunless

</div>

@endsection
