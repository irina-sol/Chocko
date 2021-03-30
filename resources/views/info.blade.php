@extends('layouts.base')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<h2>{{$obj->name}}</h2>
			<p>{!! $obj->body !!}</p>
		</div>
		<div class="col-md-4">
			<img class="pictureone" src="{{asset('uploads/'.$obj->user_id.'/s_'.$obj->picture)}}" alt="{{$obj->name}}">
		</div>
	</div>
@endsection