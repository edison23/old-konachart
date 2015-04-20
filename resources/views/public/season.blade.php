@extends('public')

@section('content')
	<div id="animus">
		@foreach ( $animus as $animu )
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="panel panel-default animu-single">
					<div class="panel-heading">
						<div class="ani-title">
							<span class="lead title">{{$animu->title}}</span>
						</div>
						<span class="studio">{{$animu->studio}}</span>
					</div>
					<img class="img-rounded" src="/images/image.jpg" alt="">
					<div class="animu-desc">
						<p>{{$animu->description}}</p>
					</div>
					<div class="animu-footer">
						<div class="row">
							<div class="col-xs-12 col-md-8">
								@if ( isset($links[$animu->id][0]) )
									
									@if ( !empty($links[$animu->id][0]->konata) )
										Články na Konatě:
									@endif
									<?=
										View::make('partials.links', [
											'link_arr' => $links[$animu->id][0],
											'l_id' => 'konata'
										]);
										?><br>
										Odkaz na <a href="{{$links[$animu->id][0]->anidb or ""}}">Anidb</a>, 
										<a href="{{$links[$animu->id][0]->ofic or ""}}">Oficiální stránky</a>
									<br>
									Upoutávka na <a href="{{$links[$animu->id][0]->youtube or ""}}">Youtube</a>
								@endif
							</div>
							<div class="col-xs-6 col-md-4">
								Premiéra: {{$animu->release_date}}
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@stop