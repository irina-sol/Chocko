@extends('layouts.base')

@push ('scripts')
<script src="js/jquery-3.5.1.min.js"></script>
<script>
function delete_position (url, ask){
	if(confirm(ask)){
		location.href=url;
	}
		return false;
}
</script>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Мое портфолио</strong></div>
					<div class="card-body">
						<form method="post" action="{{asset('portfolio/add')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group row">
								<label for="name" class="col-sm-2 col-form-label">Название</label>
								<div class="col-sm-10">
									@error('name')
									<p class="red">
										<strong>{{ $message }}</strong>
									</p>
									@enderror
									<input type="text" class="form-control" name="name" id="name">
								</div>
							</div>
							<div class="form-group row">
								<label for="body" class="col-12 col-sm-2 col-form-label">Описание</label>
									<div class="col-sm-10">
										@error("body")
										<p class="red">
											<strong>{{$message}}</strong>
										</p>
										@enderror
										<textarea class="form-control" id="body" name="body" row="4"></textarea>
									</div>
								<div class="row form-group" style="padding-top: 20px; padding-left: 42px">
									
									<label for="picture1" class="col-sm-2 ccol-form-label">Фото</label>
									
									<input type="file" class="form-control-file col-sm-7" name="picture1" id="picture1">
									
									
									<div class="col-sm-3">
										<button type="submit" class="btn button_dark">Сохранить</button>
									
									</div>
								</div>
							</div>
						</form>
						<hr>
						<table width="100%" >
							<thead>
							<tr>
								<th>Изображение</th>
								<th>Имя</th>
								<th>Варианты действий</th>
							</tr>
							</thead>
							<tbody>
							@foreach($works as $work)
							<tr>
								<td><img src="{{asset('uploads/'.$work->user_id.'/ss_'.$work->picture)}}" alt="{{$work->name}}"</td>
								<td>{{{$work->name}}}</td>
								<td><a href="#" onClick="delete_position ('{{asset('work/delete/'.$work->id)}}', 'Вы действительно хотите удалить это изображение?')" class="btn button_delete">Удалить</a></td>
								<td><a href="{{asset('info'.$work->id)}}" class="btn btn-light" target="_blank">Показать</a></td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
