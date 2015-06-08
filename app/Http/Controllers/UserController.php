<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class UserController extends Controller {

	public function index()
	{
		
	}
	
	public function login()
	{
		return view('Auth.login');
	}
	

}
