@extends('public')

@section('content')
	<div id="animus">
		@foreach ( $animus as $animu )
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
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
						@foreach (explode($links[$animu->id][0]->youtube, ',') as $youtube)
							{{$youtube}}
						@endforeach
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop