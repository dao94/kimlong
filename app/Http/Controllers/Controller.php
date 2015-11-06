<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request as Request;

use App\Http\Models\Category;
use App\Http\Models\Settings;
use View;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	 function __constructor(){
		View::share('menu' ,$this->getMenuCategory());
		View::share('setting' ,Settings::getSetting());
	}

	


	public function paging ($model, Request $request){
		$page       = $request->has('page')                ? (int)$request->get('page')                       : 1;
        $limit    	= $request->has('limit')               ? (int)$request->get('limit')                      : 20;
        $offset     = ($page - 1)*$limit;

        return $model->offset($offset)->limit($limit)->get()->toArray();
	}

	public function getMenuCategory($active = ""){
		$Model = new Category;
		$Data = $Model->orderBy('id', 'DESC')->orderBy('ordinal', 'ASC');
		if(!empty($active)){
			$Data = $Data->where('active', $active);
		}
		return $Data->get()->toArray();
	}
}
