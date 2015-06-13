@extends('master')

@section('content')
	
	<h2>Add A New Song</h2>

	{!! Form::open(['route' => 'songs.store']) !!}

		@include('songs.form');

	{!! Form::close() !!}

	{{ var_dump($errors)}}
@stop