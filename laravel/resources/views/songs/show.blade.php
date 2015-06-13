@extends('master')

@section('content')


	<h2>{{ $song->title }}</h2>

	@if ($song->lyrics)
		<article class="lyrics">
			{!! nl2br($song->lyrics) !!}
		</article>
	@endif

	<a href="../songs"> Go back to Home</a>
	
@stop