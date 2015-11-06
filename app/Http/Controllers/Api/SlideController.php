<?php namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Response;
use App\Http\Models as Models;
use DB;
use Illuminate\Support\Facades\Session;
class SlideController extends Controller {

	/**
	 * Hiển thị danh sách tin tức
	 * @author thinhit http://github.con/thinhit
	 * @return Response <json>
	 */

	public function __construct()
	{
		$this->middleware('auth');
	}

	/*Hiển thị danh sách slide*/
	public function getIndex(Request $request)
	{
		
		$Model = new Models\Slide();
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
	/*Thêm mới slide */
	public function postPost(Request $request){
		$arr      = ['error' => false,'message' => '','data' => ''];
		$name     = $request->input('name');
		$alt      = $request->input('alt');
		$image    = $request->input('images');
		if(isset($name) && !empty($name)) {
			$table              = new Models\Slide;
			$table->name        = $name;
			$table->create_time = date("Y-m-d H:i:s");
			$table->images      = $image;
			$table->alt         = $alt;
			$table->status      = 2;// 2 : không chọn , 1 là được chọn
			$rs                 = $table->save();
			$LastInsertId       = $table->id;
			$data = ['id' => $LastInsertId,
					'name'        => $name,
					'create_time' => date("Y-m-d H:i:s"),
					'images'      => $image,
					'alt'         => $alt,
					'status'      => 2// 2 : không chọn , 1 là được chọn
					];
			if($rs == true) {
				$arr['data']    = $data;
				$arr['message'] = 'Done';
			} else {
				$arr['error']   = true;
				$arr['message'] = 'Not Done';
			}
		} else {
			$arr['error']   = true;
			$arr['message'] = 'null';
		}
		return Response::json($arr);
	}

	/*chỉnh sửa trạng thái */
	public function postChangestatus(Request $request) {
		$id     = $request->input('id');
		$stt    = $request->input('status');
		$status = $stt == 1 ? 2 : 1;
		if(!isset($id) && empty($id)) {
			return false;
		}
		$rs = DB::table('slide')->where('id',$id)->update(array('status' => $status));
		if($rs == true) {
			$data = ['id' => $id,'status' => $status];
			$arr = array('error' => true,'message' => 'Done','data'=>$data);
		} else {
			$arr = array('error' => false,'message' => 'not Done');
		}
		return json_encode($arr);
	}
	/*chỉnh sửa slide*/
	public function postPush(Request $request) {
		$arr  = ['error' => false,'message' => '','data' => ''];
		$id       = $request->input('id');
		$name     = $request->input('name');
		$alt      = $request->input('alt');
		$image    = $request->input('images');
		if(isset($name) && !empty($name)) {
			$table              = Models\Slide::find($id);
			$table->name        = $name;
			$table->update_time = date("Y-m-d H:i:s");
			$table->images      = $image;
			$table->alt         = $alt;
			$rs                 = $table->save();
			$data = ['id' => $id,
						'name'        => $name,
						'update_time' => date("Y-m-d H:i:s"),
						'images'      => $image,
						'alt'         => $alt,
					];
			if($rs == true) {
				$arr['data']    = $data;
				$arr['message'] = 'Done';
			} else {
				$arr['error']   = true;
				$arr['message'] = 'not done ';
			}
		} else {
			$arr['message'] = 'null';
		}
		return json_encode($arr);
	}
	/*xóa tin tức */
	public function postDelete(Request $request) {
		$id   = $request->input('id');
		if(!isset($id) && empty($id)) {
			return false;
		}
		$image = DB::table('slide')->where('id','=',$id)->pluck('images');
		$rs    = DB::table('slide')->where('id', '=',$id)->delete();
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
