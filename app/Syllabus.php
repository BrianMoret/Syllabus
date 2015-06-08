<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Syllabus extends Model {

	protected $table = 'Syllabus_items';
	protected $fillable = [
		'title',
		'body'
	];
	


}
