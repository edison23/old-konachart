@extends('admin')

@section('content')
	<h1>Upravit sezónu</h1>
	{!! Form::open(['url' => 'admin/edit-season']) !!}
		<div class="form-group">
			{!! Form::text('id', $season->id) !!}
			{!! Form::text('name', $season->name) !!}
			<br>
		</div>
		<div class="form-group">
			{!! Form::submit('Uložit', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}

@stop