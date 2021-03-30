@extends('layouts.base')
@section('content')
<div class="maintext">
	<div>
		<h2>{{$obj->name}}</h2>
			<hr>
				{!!$obj->body!!}
	</div>
</div>
@endsection