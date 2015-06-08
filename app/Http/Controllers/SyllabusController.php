<?php namespace App\Http\Controllers;

use App\Syllabus;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class SyllabusController extends Controller {

	public function create()
	{
		return view('syllabus.create');
	}
	
	public function overview()
	{
		$syllabus_items = Syllabus::latest()->get();
		return view('syllabus.overview', compact('syllabus_items'));
	}
	
	public function saveSyllabus()
	{
		Syllabus::create(Request::all());
		
		return redirect('syllabus.overview');
	}
	
	public function detail($id)
	{
		$syllabus_item = Syllabus::findOrFail($id);
		
		return view('syllabus.detail', compact('syllabus_item'));
		
	}
	public function edit($id)
	{
		
	}
	public function link($id)
	{
		
	}
	
	public function delete($id)
	{
		
	}
	
	
	

}