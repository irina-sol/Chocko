@extends('layouts.base')
@section('content')

	<h2>{{$obj->name}}</h2>
	<img src="{{asset('uploads/'.$obj->user_id.'/'.$obj->picture)}}" alt="{{$obj->name}}">
	<p>{!! $obj->body !!}</p>
@endsection