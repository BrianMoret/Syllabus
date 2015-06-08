@extends('app')

@section('title', 'Detail')

@section('content')
<a href="{{action('SyllabusController@overview')}}"><span class = "glyphicon glyphicon-arrow-left">&nbsp; Return to overview</a>
	<h1>{{$syllabus_item->title}}</h1>

		<article>
			{{$syllabus_item->body}}
		</article>

@stop

