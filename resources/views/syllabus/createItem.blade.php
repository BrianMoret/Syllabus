@extends('app')

@section('title', 'Create')

@section('content')
	<h1>Create new syllabus item</h1>
	
	<hr/>

	{!!Form::open()!!}
	
	<div class = "form-group">
		{!! Form::label('title', 'Title:')!!}
		{!! Form::text('title', null, ['class' => 'form-control'])!!}
	</div>
	
	<div class = "form-group">
		{!! Form::label('body', 'Body:')!!}
		{!! Form::textarea('body', null, ['class' => 'form-control'])!!}
	</div>

	<div class = "form-group">
		{!! Form::label('syllabus_id', 'Syllabus:')!!}
		@foreach($syllabi as $syllabus=>$value)
			<option value = "{{$value}}" name = "{{$value}}"/>
		@endforeach
		{!! Form::select('syllabus_id', null, ['class' => 'form-control'])!!}
	</div>
	
	<div class = "form-group">
		{!! Form::submit('Add syllabus', ['class' => 'btn btn-primary form-control'])!!}
	</div>
	{!! Form::close() !!}

@stop