<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Introduction extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'introduction';
	
	var $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public function getlist() {
		$_Intro = DB::table('introduction')->select('id','name')->where('status','=',1)->orderBy('create_time')->get();	
		return $_Intro;
	}
	public function getdetail() {
		$_Intro = DB::table('introduction')->select('id','name','content')->where('status','=',1)->orderBy('create_time')->first();	
		return $_Intro;
	}
}
