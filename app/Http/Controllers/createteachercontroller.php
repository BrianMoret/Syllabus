<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Request;
use auth;
use App\Teacher;

class createteachercontroller extends Controller {


	public function index()
	{
		return view('createteacher');
    }


	public function store()
	{


		$input = Request::all();
		//$input->auth = $auth;
		//$input->registrar = $registrar;


		//dd($input);
		Teacher::create($input);

		
		return redirect('home');
	}



}
