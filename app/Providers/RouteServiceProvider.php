<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
    * This namespace is applied to the controller routes in your routes file.
    *
    * In addition, it is set as the URL generator's root namespace.
    *
    * @var string
    */
    protected $namespace = 'App\Http\Controllers';

    /**
    * Define your route model bindings, pattern filters, etc.
    *
    * @param  \Illuminate\Routing\Router  $router
    * @return void
    */
    public function boot(Router $router)
    {
        parent::boot($router);

        $router->bind('publishedArticles', function ($id) {
            return \App\Article::published()->findOrFail($id);
        });

        $router->bind('anyArticles', function ($id) {
            return \App\Article::findOrFail($id);
        });

        $router->bind('images', function ($id) {
            return \App\Image::findOrFail($id);
        });

        $router->bind('tagsName', function ($name) {
            return \App\Tag::where('name', $name)->firstOrFail();
        });

        $router->bind('tagsId', function ($id) {
            return \App\Tag::findOrFail($id);
        });
    }

    /**
    * Define the routes for the application.
    *
    * @param  \Illuminate\Routing\Router  $router
    * @return void
    */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
