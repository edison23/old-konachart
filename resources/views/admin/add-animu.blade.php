@extends('app')

@section('content')
	<h1>Přidat animu</h1>
	{!! Form::open(['url' => action('SeasonController@add_animu')]) !!}
		<div class="form-group">
			{!! Form::label('ID Sezony') !!}
			{!! Form::text('season_id') !!}
			
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

