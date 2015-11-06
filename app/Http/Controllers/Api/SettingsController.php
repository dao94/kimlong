<?php namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Response;
use App\Http\Models as Models;
use DB;
use Illuminate\Support\Facades\Session;
use App\Http\Models\Settings;
class SettingsController extends Controller {

	/**
	 * Hiển thị danh sách tin tức
	 * @author thinhit http://github.con/thinhit
	 * @return Response <json>
	 */

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		return Response::json([
			'error' 		=> false,
			'error_message' => "",
			'data'			=> Settings::getSetting()
		]);
	}

	public function postSave (Request $request)
	{
		$Input = $request->all();
		try {
			foreach ($Input as $key => $value){
				Settings::where('key', $key)->update(['value' => $value]);
			}
		} catch (Exception $e) {
			return Response::json([
				'error' 		=> true,
				'error_mesage'	=> "",
				'data' 			=> []
			]);
		}
		return Response::json([
			'error' 		=> false,
			'error_mesage'	=> "Thành công",
			'data' 			=> []
		]);
	}

}
