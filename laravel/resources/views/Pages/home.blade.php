@extends('master')



@section('content')
	

	<!--display variable method 1-->
	<h1><?= $name; ?></h1>

	<!--display variable method 2-->
	<h1>{!! $name !!}</h1>

	<!--display variable method 3-->
	<h1>{{$name}}</h1>
	
	<?php foreach ($lessons as $lesson): ?>

		<h2> {{ $lesson }}</h2>

	<?php endforeach;	?>

@stop

