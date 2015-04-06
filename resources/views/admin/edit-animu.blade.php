@extends('admin')

@section('content')

	<h1>Upravit animu</h1>
	{!! Form::open(['url' => action('AnimuController@update')]) !!}
		<div class="form-group">
			
			{!! Form::hidden('id', $animu->id) !!}

			{!! Form::hidden('season_id', $animu->season_id) !!}
			
			{!! Form::label('Titul') !!}
			{!! Form::text('title', $animu->title, ['class' => 'form-control']) !!}
			
			{!! Form::label('Studio') !!}
			{!! Form::text('studio', $animu->studio, ['class' => 'form-control']) !!}
			
			{!! Form::label('Popis') !!}
			{!! Form::textarea('description', $animu->description, ['class' => 'form-control']) !!}

			{!! Form::label('Link Konata') !!}
			{!! Form::text('konata', $links->konata, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link Anidb') !!}
			{!! Form::text('anidb', $links->anidb, ['class' => 'form-control']) !!}
			
			{!! Form::label('Link Oficial') !!}
			{!! Form::text('ofic', $links->ofic, ['class' => 'form-control']) !!}

			{!! Form::label('Link Youtube') !!}
			{!! Form::text('youtube', $links->youtube, ['class' => 'form-control']) !!}

			
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}

@stop