@extends('app')

@section('content')
	<h1>Přidat animu do sezóny {{ $season->name }}</h1>
	{!! Form::open(['url' => action('AnimuController@add_animu', $season->id)]) !!}
		<div class="form-group">
			{!! Form::hidden('season_id', $season->id) !!}
			
			{!! Form::label('Titul') !!}
			{!! Form::text('title') !!}
			
			{!! Form::label('Studio') !!}
			{!! Form::text('studio') !!}
			
			{!! Form::label('Popis') !!}
			{!! Form::textarea('description') !!}
			<br>
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}
@stop

