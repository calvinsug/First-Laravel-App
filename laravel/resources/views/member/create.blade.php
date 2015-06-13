@extends('mastermember')

@section('content')
	
	<h2>Add A New Member</h2>

	{!! Form::open(['route' => 'member.store','files' => true]) !!}

		@include('member.form')

	{!! Form::close() !!}

@stop