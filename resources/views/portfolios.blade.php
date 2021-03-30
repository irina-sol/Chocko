@extends ('layouts.base')
@push ('scripts')
	<script src={{asset('js/modal-window.js')}}"></script>
@endpush
@section('content')
	<div class="row">
	<div class="col-md-8"><h2 style="color: #492401">Моё портфолио -   {{ Auth::user()->name }}</h2></div>
	<div class="col-md-4" style="text-align: right">
		<a href="{{asset('home')}}" class="btn button-edit" target="_blank">Редактировать</a>
	</div>
	</div>
	<hr>
	<div class="row">
	@foreach ($obj as $one)
	<div class="col-md-4">
		<div class="card" style="width: 100%">
			<img class="card-img-top" id="img" src="{{asset('uploads/'.$one->user_id.'/s_'.$one->picture)}}" /*alt="{{$one->name}}"*/>
			<div class="card-body">
				<h5 class="cardtitle">{{$one->name}}</h5>
				<p class="card-test">{!! $one->body !!}</p>
				<a href="#" class="btn btn-light modal_window" id="modal_window"  user-id="{{$one->user_id}}" data-id="{{$one->id}}" picture-id="{{asset('uploads/'.$one->user_id.'/'.$one->picture)}}">Подробнее</a>
				<a href="{{asset('info'.$one->id)}}" target="_blank" class="btn btn-light">Открыть в новом окне</a>
			</div>
		</div>
	</div>
	@endforeach
	</div>
@endsection