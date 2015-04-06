@extends('app')

@section('content')
	{!! Form::open() !!}
		<div class="form-group">
		@foreach ($entries as $entry)
			{!! Form::text('season_id', $entry->season_id) !!}
			{!! Form::text('title', $entry->title) !!}
			{!! Form::text('studio', $entry->studio) !!}
			{!! Form::textarea('description', $entry->description) !!}
			<hr>
		@endforeach
		</div>
		<div class="form-group">
			{!! Form::text('season_id') !!}
			{!! Form::text('title') !!}
			{!! Form::text('studio') !!}
			{!! Form::textarea('description') !!}
			<br>
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}

@stop