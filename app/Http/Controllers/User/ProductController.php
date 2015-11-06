<?php namespace App\Http\Controllers\User;
use App\Quotation;
use App\Http\Controllers\Controller;
use App\Http\Models as Models;
use DB;
use View;
use Illuminate\Http\Request;
use  App\Http\Models\Product;
use  App\Http\Models\Category;

class ProductController extends Controller {

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
	public function index(Request $request,$slug)
	{
		$explodeSlug = explode('-', $slug);
		$id          = end($explodeSlug);
		if(!$id)
			return false;

		$Product    = new Product();
		$Product    = $Product->with('category')->find($id);
		$categoryId = $Product->category_id;
		$data       = [
			"title"          => $Product->name,
			'product'        => $Product,
			"product_newest" => $Product->getProductsByCategory(10,$categoryId),
		];
		
		return View::make('user/product', $data);
	}

	public function category(Request $request,$slug)
	{
		$explodeSlug = explode('-', $slug);
		$id          = end($explodeSlug);
		if(!$id)
			return false;
		$Product      = new Product();
		$product_list = $Product->listProductByCategory($id);
		$name         = Category::getName($id);
		$data         = [
			"title"         => $name ? $name->name : '',
			"error"         => "false",
			'product_list'  => $product_list,
			'name_category' => $name
		];
		return View::make('user/category', $data);
	}

	public function showProduct(Request $request) {
		$obj   = new Product();
		$items = $obj->getData();
		$data         = [
			"title"         => 'Sản phẩm',
			"error"         => "false",
			'items'         => $items
		];
		return View::make('user/list_product', $data);	
	}

}
