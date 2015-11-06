<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'User\HomeController@index');
Route::get('/abc', function () {
	echo 1;die;
});

Route::get('san-pham/{slug}','User\ProductController@index');
Route::get('chuyen-muc/{slug}','User\ProductController@category');
Route::get('san-pham','User\ProductController@showProduct');
Route::get('tin-tuc','User\NewsController@index');
Route::get('lien-he','User\ContactsController@index');
Route::get('tin-tuc/{slug}','User\NewsController@detail');
Route::get('gioi-thieu','User\IntroduceController@index');

/*API*/

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function()
{	
	Route::controller('group_news'	, 'Api\GroupnewsController');
	Route::controller('category'	, 'Api\CategoryController');
	Route::controller('news'		, 'Api\NewsController');
	Route::controller('partner'		, 'Api\PartnerController');
	Route::controller('images'		, 'Api\ImagesController');
	Route::controller('slide'		, 'Api\SlideController');
	Route::controller('support'		, 'Api\SupportController');
	Route::controller('album'		, 'Api\AlbumController');
	Route::controller('introduction', 'Api\IntroductionController');
	Route::controller('product'		, 'Api\ProductController');
	Route::controller('upload'		, 'Api\UploadController');
	Route::controller('setting'		, 'Api\SettingsController');

});

/*Admin*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{	
	Route::controller('', 'Admin\MainController');

});

Route::controllers([
	
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
