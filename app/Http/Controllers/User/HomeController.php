<?php namespace App\Http\Controllers\User;
use App\Quotation;
use App\Http\Controllers\Controller;
use App\Http\Models as Models;
use DB;
use View;
use Illuminate\Http\Request;
use  App\Http\Models\Product;
use  App\Http\Models\Category;
use  App\Http\Models\Slide;
use  App\Http\Models\News;

class HomeController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__constructor();
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Product = new Product();
		$Slide 	 = new Slide();
		$data = [
			"title"			 => "Trang chủ",
			"slide"			 => $Slide->getlist(),
			"product_newest" => $Product->getNewestProducts(),
			'category_show_in_index'  => $this->getCategoryShowInIndex(),
			'news'				=> News::list_news_pagehome(6)
		];
		return View::make('user/home', $data)->withModel($Product);
	}

	private function getCategoryShowInIndex (){
		$ListCategory = Category::where('active', 1)->orderBy('ordinal', 'ASC');
		return $ListCategory->get();
	}
	


}
