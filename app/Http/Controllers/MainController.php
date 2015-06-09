<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use Auth;

class MainController extends Controller {

	public function index()
	{
		if (Auth::guest()) {
			return view('auth/login');
		}
		else{
			Redirect::guest('login');
		}	

		
	}
	
	

}