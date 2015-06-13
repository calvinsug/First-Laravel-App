@extends('mastermember')

@section('content')

	{{--@foreach($songs as $index => $song)
		<li><a href="/songs/{{$index}}"> {{ $song }} </a></li>
	@endforeach --}}

	@foreach($members as $member)
		<li><a href="/member/{{$member->id}}"> {{ $member->name }} </a>
			<a href="/member/{{$member->id}}/edit"> 
				<button class="btn btn-lg btn-primary">Edit</button> 
			</a> 
			{!! delete_form(['member.destroy', $member->id]) !!}

		</li>

	@endforeach


	<a href="/member/create"> 
		<button class="btn btn-lg btn-primary">Create A new Member</button> 
	</a> 

	@if( isset($_GET['success']))
		<div class="notif"></div>
	@endif

@stop