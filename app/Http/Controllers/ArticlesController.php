<?php namespace App\Http\Controllers;

use App\Image as ImageModel;
use App\Tag;
use \Auth;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller
{

    /**
     * Create a new articles controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'index',
                'show'
            ]
        ]);
    }

    /**
     * Show all articles
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->paginate(3);

        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show a single article
     *
     * @param Article $article
     * @return Response
     */
    public function show(Article $article)
    {
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the page to create a new article
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Save a new article
     *
     * @param ArticleRequest $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $this->createArticle($request);

        flash()->success('Your article has been created');

        return redirect('admin/articles');
    }

    /**
     * Edit an existing article
     *
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update an article
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return Response
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        if ($request->has('image_list'))
        {
            $this->syncImages($article, $request->input('image_list'));
        }

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('admin/articles');
    }

    /**
     * Sync up the list of tags in the database
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    /**
     * Sync up the list of images in the database
     *
     * @param Article $article
     * @param array $images
     */
    private function syncImages(Article $article, array $images)
    {
        $article->images()->sync($images);
    }

    /**
     * Save a new article
     * @param ArticleRequest $request
     * @return Article
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        if ($request->has('image_list')) {
            $this->syncImages($article, $request->input('image_list'));
        }

        $this->syncTags($article, $request->input('tag_list'));

        return $article;
    }
}
