@extends('layouts.base')
@section('content')
<div class="maintext">
	<div class="row courses"><h2 style="padding-left: 15px">Наши курсы</h2></div>
	<hr>
</div>
	<div class="row courses">
		@foreach ($courses as $one)
		<div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="{{asset('courses/'.$one->picture)}}.jpg" alt="{{$one->name}}">
          <div class="card-body">
            <h4 class="card-title">{{$one->name}}</h4>
            <p class="card-text">{!!$one->text!!}</p>
          </div>
          <div class="card-footer">
            <a href="{{asset('details'.$one->id)}}" class="btn button_dark but">Узнать больше</a>
          </div>
        </div>
      </div>
	@endforeach
	 </div>
@endsection
