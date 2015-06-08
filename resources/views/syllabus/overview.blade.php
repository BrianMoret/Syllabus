@extends('app')

@section('title', 'Overview')

@section('content')
	<h1>Syllabus items</h1>
	
	<hr/>
	
	<table class = "table table-hover">
	<tr><th>Title</th><th colspan = 3>Functions</th></tr>
	@foreach($syllabus_items as $syllabus_item)
		<tr>
			<td>
				<a href = "{{action('SyllabusController@detail',[$syllabus_item->id])}}">{{$syllabus_item->title}}</a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@edit',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-edit"></span></a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@link',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-education"></span></a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@delete',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-remove"></span></a>
			</td>
		</article>
	@endforeach

@stop