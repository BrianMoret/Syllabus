<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SyllabusItems extends Model {

	protected $table = 'Syllabus_items';
	protected $fillable = [
		'title',
		'body',
		'created_by',
		'syllabi_id'
	];
	
	public function syllabus()
	{
		return $this->belongsTo('App\Syllabi', 'syllabi_id', 'id');
	}

}