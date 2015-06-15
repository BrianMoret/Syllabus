<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

	protected $table = 'users';
	protected $fillable = [
	'name', 
	'email',
	'password',
    'type'  '2';
	];
}
