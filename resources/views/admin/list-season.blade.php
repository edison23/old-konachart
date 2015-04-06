@extends('app')

@section('content')
	<h1>Seznam anime pro sezonu</h1>

	<div class="panel-body">
		<table class="table table-striped">
				<thead>
					<th>Název</th><th>Akce</th>
			</thead>
			<tbody>
				@foreach ($season as $animu)
					<tr>
						<td>{{$animu->title}}</td>
						<td>Smazat</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop