@extends('app')

@section('title', 'Overview')

@section('content')
	<h1>Syllabus items</h1>
	
	<hr/>
	<p><a href = "/syllabus/create"><span class = "btn btn-primary">Create new syllabus item</span></a></p>
	<p><a href = "/overview"><span class = "btn btn-primary">Return to overview</span></a></p>
	<table class = "table table-hover">
	<tr><th>Title</th><th colspan = 3>Functions</th></tr>
	@foreach($syllabus_items as $syllabus_item)
		<tr>
			<td>
				<a href = "{{action('SyllabusController@detailItem',[$syllabus_item->id])}}">{{$syllabus_item->title}}</a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@editItem',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-edit"></span></a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@linkItem',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-education"></span></a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@deleteSyllabusItem',[$syllabus_item->id])}}"><span class = "glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
	@endforeach
	</table>
@stop