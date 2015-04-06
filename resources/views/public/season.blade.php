@extends('public');

@section('content')
	@foreach ( $animus as $animu )
		<div class="col-md-3">
			<div class="panel panel-default animu-single">
				<div class="panel-heading">
					<span class="lead title">{{$animu->title}}</span>
					<span class="studio">{{$animu->studio}}</span>
				</div>
				<img class="img-rounded" src="images/image.jpg" alt="">
				<div class="animu-desc">
					<p>{{$animu->description}}</p>
				</div>
				<div class="animu-footer">
					Odkazy
				</div>
			</div>
		</div>
	@endforeach
@stop