<?php namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Http\Models as Models;
use DB;
// use Carbon\Carbon;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Hiển thị danh sách nhóm tin tức
	 * @author daotc94@gmail.com
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/*Hiển thị Nhóm tin tức*/
	public function getIndex(Request $request)
	{	
		$Model = new Models\Album();
		$Total = $Model->get()->count();
		$Model = $Model->orderBy('id','DESC');
		$datas = $this->paging($Model, $request);

		$_objReturn = array(
			"error" 	=> false,
			"data"		=> array(),
			"message"	=> "",
			"total"		=> $Total
		);

		if($datas){
			$_objReturn['data'] = $datas;
		}
		return Response::json($_objReturn);


	}
	/*Thêm mới nhóm tin tức*/
	public function postPost(Request $request){
		$arr      = ['error' => false,'message' => '','data' => ''];
		$col_data = DB::table('album')->lists('name');
		$name     = $request->input('name');
		if(isset($name) && !empty($name)) {
			if(in_array($name,$col_data)) {
				$arr['message'] = 'exits_data';
			} else {
				$table              = new Models\Album;
				$table->name        = $name;
				$table->create_time = date("Y-m-d H:i:s");
				$rs           = $table->save();
				$LastInsertId = $table->id;
				$data = ['id' => $LastInsertId,'name' => $name,'create_time' => date("Y-m-d H:i:s")];
				if($rs == true) {
					$arr['data']    = $data;
					$arr['message'] = 'Done';
				} else {
					$arr['error']   = true;
					$arr['message'] = 'Not Done';
				}
			}
		} else {
			$arr['error']   = true;
			$arr['message'] = 'null';
		}
		return Response::json($arr);
	}
	
	/*Chỉnh sửa nhóm tin tức*/
	public function postPush(Request $request) {
		$id                      = $request->input('id');
		$name                    = $request->input('name');
		$col_data = DB::table('album')->lists('name');
		if(isset($name) && !empty($name)) {
			if(in_array($name,$col_data)) {
				$arr['message'] = 'exits_data';
			} else {
				$table              = Models\Album::find($id);
				$table->name        = $name;
				$table->update_time = date("Y-m-d H:i:s");
				$rs = $table->save();
				$data = ['id' => $id,'name' => $name,'update_time' => date("Y-m-d H:i:s")];
				$arr = ['error' => false,'message' => '','data' => ''];
				if($rs == true) {
					$arr['data']    = $data;
					$arr['message'] = 'Done';
				} else {
					$arr['error']   = true;
					$arr['message'] = 'not done ';
				}
			}
		} else {
			$arr['message'] = 'null';
		}
		return json_encode($arr);
	}

	/*Xóa nhóm ảnh*/
	public function postDelete(Request $request) {
		$id   = $request->input('id');
		if(!isset($id) && empty($id)) {
			return false;
		}
		$_res_child = DB::table('images')->where('album_id','=',$id)->get();
		if(empty($_res_child)) {
			$table = new Models\Album;
			$table = Models\Album::find($id);
			$rs = $table->delete();
			if($rs == true) {
				$arr = array('error' => true,'message' => 'Done');
			} else {
				$arr = array('error' => false,'message' => 'not Done');
			}
		} else {
			$arr = ['error'=>false,'message' => 'exits_data_children'];
		}
		
		return json_encode($arr);
	}

}
