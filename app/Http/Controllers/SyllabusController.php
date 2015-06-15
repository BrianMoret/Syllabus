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
		//$syllabus_items = SyllabusItems::where('syllabi_id', '=', $id)->latest()->get();
		//$syllabusTitle = "Lorum";//$syllabus_items->syllabus()->title;
		
		$syllabi = Syllabi::find($id);
		
		//return view('syllabus.overviewItems', compact('syllabus_items'))->with('syllabus_id', $id)->with('syllabusTitle',$syllabusTitle);
		return view('syllabus.overviewItems', compact('syllabi'));
	}
	
	public function createItem($id)
	{
		$syllabi = Syllabi::all()->lists('title', 'id');
		return view('syllabus.createItem', compact('syllabi'))->with('id', $id);
	}
	
	public function saveSyllabusItem($id)
	{
		
		//SyllabusItems::create(Request::all());
		// $data = Request::input('title','body','syllabi_id');
		// $data['created_by'] = Auth::User()->id;
		// SyllabusItems::create($data);
		$Syllabi = new SyllabusItems;
		$Syllabi->title = Request::Input("title");
		$Syllabi->body = Request::Input("body");
		$Syllabi->syllabi_id = Request::Input("syllabus_id");
		$Syllabi->created_by = Auth::User()->id;
		$Syllabi->save();
		
		
		return redirect('/overview/items/'. $id);
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