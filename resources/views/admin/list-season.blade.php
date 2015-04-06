@extends('admin')

@section('content')
	<h1>Seznam anime pro sezonu {{ $title }}</h1>

	<div class="panel-body">

		@if (Session::get('success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{ Session::get('success') }}
			</div>
		@endif

		<a href="{{ action('AnimuController@add_animu', $id) }}">Přidat sérii</a>
		<table class="table table-striped">
				<thead>
					<th>Název</th><th>Akce</th>
			</thead>
			<tbody>
				@foreach ($season as $animu)
					<tr>
						<td><a href="{{ action('AnimuController@edit_animu', $animu->id) }}">{{$animu->title}}</a></td>
						<td><a href="{{ action('AnimuController@delete', $animu->id) }}" onclick="if(!confirm('Opravdu smazat?')){return false;};">Smazat</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop