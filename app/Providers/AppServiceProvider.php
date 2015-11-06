<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Helper;
use App\Http\Models\Product;
use App\Http\Models\Category;
use App\Http\Models\News;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Category::creating(function ($category) {
            $category->slug = Helper::slugify($category->name);
            return true;
        });	
        Product::creating(function ($product) {
            $product->slug = Helper::slugify($product->name);
            return true;
        });

        News::creating(function ($news) {
            $news->slug = Helper::slugify($news->name);
            return true;
        });


        Category::updating(function ($category) {
            $category->slug = Helper::slugify($category->name);
            return true;
        });	

        Product::updating(function ($product) {
            $product->slug = Helper::slugify($product->name);
            return true;
        });
        News::updating(function ($news) {
            $news->slug = Helper::slugify($news->name);
            return true;
        });	


	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('path.public', function() {
          return base_path().'/public_html';
        });
        
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
