@extends('mastermember')

@section('content')


	<h2>{{ $member->name }}</h2>

	@if ($member->photo)
		<article class="photo">
			<img style="width:150px;height:150px" src="{{ asset('images/member') }}/{!! nl2br($member->photo) !!}">
		</article>
	@endif
	{{ $member->email}}
	{{ $member->address}}
	{{ $member->phone}}
	{{ $member->dob}}
	<a href="../member"> Go back to Home</a>
	
@stop