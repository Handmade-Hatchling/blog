<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Create a new tags controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => [
                'show'
            ]
        ]);
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(TagRequest $request)
    {
        Tag::create($request->all());

        flash()->success('Your tag has been created');

        return redirect('admin/tags');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit')->with('tag', $tag);
    }

    public function update(Tag $tag, TagRequest $request)
    {
        $tag->update($request->all());

        redirect('admin/tags');
    }

    public function show(Tag $tag)
    {
        $articles = $tag->articles()->published()->paginate(15);

        return view('articles.index')->with('articles', $articles);
    }
}
