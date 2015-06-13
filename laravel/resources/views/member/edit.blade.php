@extends('mastermember')

@section('content')
	
	<h2>{{ $member->name }}</h2>

	{{--!! Form::open()  !! --}}
	{{-- 'url' => 'songs/' . $song->slug --}}

	{!! Form::model($member , ['route' => ['member.update', $member->id] , 'method' => 'PATCH' , 'files' =>true]) !!}

		@include('member/form')


	{!! Form::close() !!}

	{!! delete_form(['member.destroy', $member->id]) !!}
	{{-- 
		{!! Form::open(['method' => 'delete' , 'route' => ['songs.destroy', $song->slug]]) !!}

			<div class="form-group">
				{!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
			</div>

		{!! Form::close() !!}
	--}}
@stop