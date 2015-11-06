<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Images extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';
	
	var $timestamps = false;
	protected $hidden = array();

	
	// // Start for relations
	// public function Author(){
	// 	return $this->hasOne('App\Http\Models\User', 'id', 'user_id')->select('id', 'name');
	// }
	
	public function album(){
		return $this->hasOne('App\Http\Models\Album', 'id', 'album_id')->select('id', 'name');
	}
	// End for relations

	public function getAll(){
		$_ret = $this->with(array('album'));
		$_ret = $_ret->select('id', 'name', 'images','album_id','alt','link', 'create_time', 'update_time', 'status');
		return $_ret;
	}
	public function getlist($album_id) {
		$_ObjImage = DB::table('images')->select('id','name','alt','images')->where('album_id','=',$album_id)->where('status','=','1')->orderBy('create_time')->get();	
		return $_ObjImage;
	}
	

}
