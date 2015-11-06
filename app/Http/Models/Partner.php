<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Partner extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'partner';
	
	var $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public function getData() {
		$res = DB::table('partner')->get();
		return $res;
	}
	public function list_par($limit=0) {
		$_Partner = DB::table('partner')->select('id','name','alt','link','images','alt')->where('status','=',1)->orderBy('create_time')->take($limit)->get();	
		return $_Partner;
	}
}
