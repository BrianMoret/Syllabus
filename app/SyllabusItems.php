<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SyllabusItems extends Model {

	protected $table = 'Syllabus_items';
	protected $fillable = [
		'title',
		'body',
		'created_by',
		'syllabus_id'
	];
	


}