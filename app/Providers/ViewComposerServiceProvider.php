<?php namespace App\Providers;

use App\Article;
use App\Image;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavigation();

        $this->composeTags();
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
	}

    /**
     * Compose the navigation bar.
     */
    private function composeNavigation()
    {
        view()->composer('partials._nav', function ($view) {
            $view->with('latest', Article::latest()->first());
        });
    }

    /**
     * Compose the tags for create and edit views.
     */
    private function composeTags()
    {
        view()->composer(['articles.create', 'articles.edit', 'images.upload', 'images.edit', 'tags.create', 'tags.edit'], function ($view) {
            $tags = Tag::lists('name', 'id');
            $images = Image::lists('title', 'id');
            $view->with([
                'tags' => $tags,
                'images' => $images
            ]);
        });
    }

}
