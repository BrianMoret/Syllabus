@extends('app')

@section('title', 'Create')

@section('content')
	<h1>Create new syllabus</h1>
	<p><a href = "/overview"><span class = "btn btn-primary">Return to overview</span></a></p>
	<hr/>

	{!!Form::open()!!}
	
	<div class = "form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control'])!!}
	</div>
	
	<div class = "form-group">
		{!! Form::submit('Add syllabus', ['class' => 'btn btn-primary form-control'])!!}
	</div>
	{!! Form::close() !!}

@stop