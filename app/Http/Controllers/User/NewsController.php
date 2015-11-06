<?php namespace App\Http\Controllers\User;
use App\Quotation;
use App\Http\Controllers\Controller;
use App\Http\Models as Models;
use DB;
use View;
use Illuminate\Http\Request;
use  App\Http\Models\News;

class NewsController extends Controller {

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
		// $this->middleware('auth');
		parent::__constructor();
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$obj  = new News;
		$news = $obj->listNews(10);
		$data = [
			"title"     => "Tin tức",
			'news'      => $news,
			'curentUrl' => $request->url()
		];
		return View::make('user/news', $data);
	}

	public function detail($slug) {
		$explodeSlug = explode('-', $slug);
		$newId          = end($explodeSlug);
		if(!$newId)
			return false;
		$news = News::detail($newId);
		$data = [
			"title"     => $news ? $news->name : '',
			'news'      => $news,
		];
		return View::make('user/detailnews', $data);
	}


}
