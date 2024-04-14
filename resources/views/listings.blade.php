
<!--
<h1><?php echo $heading ?></h1>

<?php foreach($listings as $listing): ?>
       <h2><?php echo $listing['title']?></h2>
       <p><?php echo $listing['description'] ?></p>
<?php endforeach; ?>

-->


<!--  For Using this blade : rename listings.blade.php in view folder -->
<h1> {{ $heading }} </h1>

@unless (count($listings) == 0)

@foreach($listings as $listing):
       <h2>
       <a href="/listings/{{$listing['id']}}">
        {{  $listing['title'] }}
       </a>
       </h2>
       <p> {{ $listing['description'] }} </p>
@endforeach

@else
<p>No Listings Found</p>

@endunless
