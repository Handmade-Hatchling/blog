<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Staff;
use App\Article;
use App\Image;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * TODO: Display something useful
     *
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Displays a list of the Staff members
     */
    public function staff()
    {
        $staff = Staff::all();

        return view('admin.staff')->with('staff', $staff);
    }

    /**
     * Displays all created articles
     */
    public function articles()
    {
        $articles = Article::all();

        return view('admin.articles')->with('articles', $articles);
    }

    /**
     * @return $this
     */
    public function images()
    {
        $images = Image::all();

        return view('admin.images')->with('images', $images);
    }

    public function tags()
    {
        $tags = Tag::all();

        return view('admin.tags')->with('tags', $tags);
    }
}
