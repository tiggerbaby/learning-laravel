@extends('layout')

@section('content')
 <h1>All cards</h1>
@foreach ($cards as $card)
	<div>
		<h3>{{ $card->title }}</h3>
	</div>
@endforeach

 
@stop
