@extends('admin')

@section('content')
	<h5>Přidat sezónu</h5>

	{!! Form::open(['url' => 'admin/add-season']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Název') !!}
			{!! Form::text('name') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Přidat', ['class' => 'btn btn-primary ']) !!}
		</div>
	{!! Form::close() !!}
@stop