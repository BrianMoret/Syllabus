<?php namespace App\Http\Controllers;

use App\SyllabusItems;
use App\Syllabi;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DB;
use Carbon\Carbon;
use Request;
use Auth;

class SyllabusController extends Controller {

	public function overview()
	{
		$syllabi = Syllabi::latest()->get();
		return view('syllabus.overview', compact('syllabi'));
	}
	
	public function createSyllabi()
	{
		return view('syllabus.createSyllabus');
	}
	
	public function saveSyllabi()
	{
		$Syllabi = new Syllabi;
		$Syllabi->title = Request::Input("title");
		$Syllabi->created_by = Auth::User()->id;
		$Syllabi->save();
		return redirect('/overview');
	}

	public function editSyllabi($id)
	{
		
	}
	public function linkSyllabi($id)
	{
		
	}
	
	public function deleteSyllabi($id)
	{
		Syllabi::where('id', '=', $id)->delete();
		//Delete item links also!!!!
		return redirect('/overview');
	}
	
	
	//ITEMS
	
	public function overviewItems($id)
	{
		$syllabus_items = SyllabusItems::where('syllabus_id', '=', $id)->latest()->get();
		return view('syllabus.overviewItems', compact('syllabus_items'));
	}
	
	public function createItem()
	{
		$syllabi = Syllabi::all();
		return view('syllabus.createItem', compact('syllabi'));
	}
	
	public function saveSyllabusItem()
	{
		SyllabusItems::create(Request::all());
		
		return redirect('/overview');
	}

	public function detailItem($id)
	{
		$syllabus_item = SyllabusItems::findOrFail($id);
		
		return view('syllabus.detail', compact('syllabus_item'));
		
	}
	public function editItem($id)
	{
		
	}
	public function linkItem($id)
	{
		
	}
	
	public function deleteSyllabusItem($id)
	{
		SyllabusItems::where('id', '=', $id)->delete();
		return redirect('/overview');
	}
	
	
	

}