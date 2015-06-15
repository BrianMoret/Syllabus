<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Syllabi extends Model {

	protected $table = 'Syllabi';
	protected $fillable = [
		'title',
		'created_by',
	];
	
	public function user()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
	public function items()
	{
		return $this->hasMany('App\SyllabusItems');
	}
	
	
	
}