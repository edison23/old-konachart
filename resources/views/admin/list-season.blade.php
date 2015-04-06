@extends('app')

@section('content')
	<h1>Seznam anime pro sezonu</h1>

	<div class="panel-body">

		<a href="{{ action('AnimuController@add_animu', $id) }}">Přidat sérii</a>
		<table class="table table-striped">
				<thead>
					<th>Název</th><th>Akce</th>
			</thead>
			<tbody>
				@foreach ($season as $animu)
					<tr>
						<td><a href="{{ action('AnimuController@edit_animu', $animu->id) }}">{{$animu->title}}</a></td>
						<td>Smazat</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop