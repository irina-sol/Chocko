@extends('layouts.base')
@section('content')
	<h2>{{$obj->name}}</h2>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<p style="text-align: justify">{!!$obj->details!!}</p>
			<div>{!!$obj->text!!}</div>
		</div>
		<div class="col-md-6">
			<img class="picturedetails" src="{{asset('courses/'.$obj->picture)}}.jpg" alt="{{$obj->name}}">
		</div>
	</div>
	<div style="text-align: right">
		<a href="{{asset('course'.$obj->id)}}" class="btn button_dark but">Посмотреть работы</a>
	</div>
@endsection