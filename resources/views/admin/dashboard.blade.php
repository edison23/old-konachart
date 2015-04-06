@extends('admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<a href="{{ action('SeasonController@add_season') }}">Přidat sezónu</a>
				</div>

				<div class="panel-body">
					<table class="table table-striped">
						@if (Session::get('error'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								{{ Session::get('error') }}
							</div>
						@endif
						@if (Session::get('success'))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								{{ Session::get('success') }}
							</div>
						@endif
  						<thead>
  							<th>Název</th><th>Akce</th>
						</thead>
						<tbody>
							@foreach ($seasons as $season)
								<tr>
									<td><a href="{{ action('SeasonController@list_season', $season->id) }}">{{$season->name}}</a></td>
									<td>
										<a href="{{ action('SeasonController@edit_season', $season->id) }}">Upravit</a> 
										/ 
										<a href="{{ action('SeasonController@delete_season', $season->id) }}"  
											onclick="if(!confirm('Opravdu smazat?')){return false;};">Smazat</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop