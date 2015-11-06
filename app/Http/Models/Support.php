<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Support extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'support';
	
	var $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public function list_support($limit=0) {
		$_Partner = DB::table('support')->select('id','name','phone','skype','yahoo')->where('status','=',1)->orderBy('create_time')->take($limit)->get();	
		return $_Partner;
	}
}
