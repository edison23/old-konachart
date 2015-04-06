@extends('app')

@section('content')
	<h1>Přidat animu do sezóny {{ $season->name }}</h1>
	{!! Form::open(['url' => action('AnimuController@add_animu', $season->id)]) !!}
		<div class="form-group">
			{!! Form::hidden('season_id', $season->id) !!}
			
			{!! Form::label('Titul') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Studio') !!}
			{!! Form::text('studio', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Popis') !!}
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

			{!! Form::label('Datum vydání') !!}
			{!! Form::input('date', 'release_date', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link(y) - Konata') !!}
			{!! Form::text('konata', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link - Anidb') !!}
			{!! Form::text('anidb', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link(y) Youtube') !!}
			{!! Form::text('youtube', null, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link Oficiální web') !!}
			{!! Form::text('ofic', null, ['class' => 'form-control']) !!}
			<br>
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}
@stop

