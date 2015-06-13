@extends('master')

@section('content')

	{{--@foreach($songs as $index => $song)
		<li><a href="/songs/{{$index}}"> {{ $song }} </a></li>
	@endforeach --}}

	@foreach($songs as $song)
		<li><a href="/songs/{{$song->slug}}"> {{ $song->title }} </a>
			<a href="/songs/{{$song->slug}}/edit"> 
				<button class="btn btn-lg btn-primary">Edit</button> 
			</a> 
			{!! delete_form(['songs.destroy', $song->slug]) !!}

			<a href="{{ route('songs.destroy') }}"> Delete with Get Request</a>

		</li>

	@endforeach


	<a href="/songs/create"> 
		<button class="btn btn-lg btn-primary">Create A new Song</button> 
	</a> 


@stop