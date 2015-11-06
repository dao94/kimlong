<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Album extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'album';
	
	var $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public function getData() {
		$res = DB::table('album')->get();
		return $res;
	}
	public function getNameAlbum() {
		$_ObjName = DB::table('album')->select('id','name')->orderBy('create_time')->get();	
		return $_ObjName;
	}
}
