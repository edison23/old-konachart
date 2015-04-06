@extends('app')

@section('content')
	<h1>Upravit animu</h1>
	{!! Form::open(['url' => action('AnimuController@update')]) !!}
		<div class="form-group">
			
			{!! Form::label('ID zaznamu') !!}
			{!! Form::text('id', $animu->id) !!}

			{!! Form::label('ID Sezony') !!}
			{!! Form::text('season_id', $animu->season_id) !!}
			
			{!! Form::label('Titul') !!}
			{!! Form::text('title', $animu->title) !!}
			
			{!! Form::label('Studio') !!}
			{!! Form::text('studio', $animu->studio) !!}
			
			{!! Form::label('Popis') !!}
			{!! Form::textarea('description', $animu->description) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}

@stop