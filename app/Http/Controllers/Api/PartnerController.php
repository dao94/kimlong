<?php namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Http\Models as Models;
use DB;
// use Carbon\Carbon;

class PartnerController extends Controller {

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
	 * Hiển thị danh sách đối tác
	 * @author daotc94@gmail.com
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/*Hiển thị đối tác*/
	public function getIndex(Request $request)
	{	
		$Model = new Models\Partner();
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
	/*chỉnh sửa trạng thái */
	public function postChangestatus(Request $request) {
		$id     = $request->input('id');
		$stt    = $request->input('status');
		$status = $stt == 1 ? 2 : 1;
		if(!isset($id) && empty($id)) {
			return false;
		}
		$rs = DB::table('partner')->where('id',$id)->update(array('status' => $status));
		if($rs == true) {
			$data = ['id' => $id,'status' => $status];
			$arr = array('error' => true,'message' => 'Done','data'=>$data);
		} else {
			$arr = array('error' => false,'message' => 'not Done');
		}
		return json_encode($arr);
	}
	/*Thêm mới nhóm tin tức*/
	public function postPost(Request $request){
		$arr      = ['error' => false,'message' => '','data' => ''];
		$col_data = DB::table('partner')->lists('name');
		$name   = $request->input('name');
		$link   = $request->input('link');
		$alt    = $request->input('alt');
		$images = $request->input('images');
		if(isset($name) && !empty($name)) {
			if(in_array($name,$col_data)) {
				$arr['message'] = 'exits_data';
			} else {
				$table              = new Models\Partner;
				$table->name        = $name;
				$table->link        = $link;
				$table->alt         = $alt;
				$table->images      = $images;
				$table->create_time = date("Y-m-d H:i:s");
				$rs                 = $table->save();
				$LastInsertId       = $table->id;
				$data = ['id' => $LastInsertId,'name' => $name,'create_time' => date("Y-m-d H:i:s"),'link' => $link,'alt' => $alt,'images' => $images,'status'=>2];
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
	
	/*Chỉnh sửa đối tác*/
	public function postPush(Request $request) {
		$id       = $request->input('id');
		$name     = $request->input('name');
		$link     = $request->input('link');
		$alt      = $request->input('alt');
		$images   = $request->input('images');
		$col_data = DB::table('group_news')->lists('name');
		if(isset($name) && !empty($name)) {
			if(in_array($name,$col_data)) {
				$arr['message'] = 'exits_data';
			} else {
				$table              = Models\Partner::find($id);
				$table->name        = $name;
				$table->link        = $link;
				$table->alt         = $alt;
				$table->images      = $images;
				$table->update_time = date("Y-m-d H:i:s");
				$rs = $table->save();
				$data = ['id' => $id,'name' => $name,'update_time' => date("Y-m-d H:i:s"),'link'=>$link,'alt'=>$alt,'images'=>$images];
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

	/*Xóa đối tác*/
	public function postDelete(Request $request) {
		$id   = $request->input('id');
		if(!isset($id) && empty($id)) {
			return false;
		}
		$image = DB::table('partner')->where('id','=',$id)->pluck('images');
		$rs    = DB::table('partner')->where('id', '=',$id)->delete();
		$path  = "uploads/".$image;
		if($rs == true) {
			if($image !=""){
				unlink($path);	
			} else {
				// code
			} 
			$arr = array('error' => true,'message' => 'Done');
		} else {
			$arr = array('error' => false,'message' => 'not Done');
		}
		return json_encode($arr);
	}

}
