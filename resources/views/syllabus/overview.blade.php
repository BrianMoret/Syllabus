@extends('app')

@section('title', 'Overview')

@section('content')
	<h1>Syllabi overview</h1>
	
	<hr/>
	<p><a href = "/syllabus/create"><span class = "btn btn-primary">Create new syllabus</span></a></p>
	<table class = "table table-hover">
	<tr><th>Title</th><th colspan = 3>Functions</th></tr>
	@foreach($syllabi as $syllabus)
		<tr>
			<td>
				<a href = "{{action('SyllabusController@overviewItems',[$syllabus->id])}}">{{$syllabus->title}}</a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@editSyllabi',[$syllabus->id])}}"><span class = "glyphicon glyphicon-edit"></span></a>
			</td>
			<td>
				<a href = "{{action('SyllabusController@linkSyllabi',[$syllabus->id])}}"><span class = "glyphicon glyphicon-education"></span></a>
			</td>
			<td>
				<a onclick = "return confirm('Are you sure you want to delete: {{$syllabus->title}}')" href = "{{action('SyllabusController@deleteSyllabi',[$syllabus->id])}}"><span class = "glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
	@endforeach
	</table>
@stop