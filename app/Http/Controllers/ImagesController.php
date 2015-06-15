<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ImageCreateRequest;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    /**
     * Create a new images controller instance
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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('images.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageCreateRequest $request
     * @return \Response
     */
    public function store(ImageCreateRequest $request)
    {
        $image = Image::createUpload(
            $request->input(),
            $request->file('image')
        );
        $this->syncTags($image, $request->input('tag_list'));

        flash()->success('Your image has been uploaded!');

        return redirect('admin/images');
    }

    /**
     * Display the specified resource.
     *
     * @param Image $image
     * @return Response
     */
    public function show(Image $image)
    {
        return view('images.show')->with('image', $image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Image $image
     * @return Response
     * @internal param ImageRequest $request
     */
    public function edit(Image $image)
    {
        return view('images.edit')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Image $image
     * @param ImageRequest $request
     * @return Response
     */
    public function update(Image $image, ImageRequest $request)
    {
        $image->updateUpload(
            $request->input(),
            $request->file('image')
        );

        $this->syncTags($image, $request->input('tag_list'));

        flash()->success('Your image has been updated!');

        return redirect('admin/images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Sync up the list of tags in the database
     *
     * @param Image $image
     * @param array $tags
     */
    private function syncTags(Image $image, array $tags)
    {
        $image->tags()->sync($tags);
    }
}
