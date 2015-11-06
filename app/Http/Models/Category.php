<?php namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';
	
	var $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	public function get_category($limit=0) {
		$_Category = DB::table('category')->select('id','name')->take($limit)->get();	
		return $_Category;
	}

	public static function getName($id) {
		$name = DB::table('category')->select('name')->where('id',$id)->first();	
		return $name;	
	}
	
}
