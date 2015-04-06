@extends('app')

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
  						<thead>
  							<th>Název</th><th>Akce</th>
						</thead>
						<tbody>
							@foreach ($seasons as $season)
								<tr>
									<td>{{$season->name}}</td>
									<td>Smazat</td>
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