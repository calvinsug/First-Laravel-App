@extends('master')

@section('content')
	
	<h2>{{ $song->title }}</h2>

	{{--!! Form::open()  !! --}}
	{{-- 'url' => 'songs/' . $song->slug --}}

	{!! Form::model($song , ['route' => ['songs.update', $song->slug] , 'method' => 'PATCH']) !!}

		@include('songs/form')

	{!! Form::close() !!}

	{!! delete_form(['songs.destroy', $song->slug]) !!}
	{{-- 
		{!! Form::open(['method' => 'delete' , 'route' => ['songs.destroy', $song->slug]]) !!}

			<div class="form-group">
				{!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
			</div>

		{!! Form::close() !!}
	--}}
@stop