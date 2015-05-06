<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Pages Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "frontend pages" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    public function welcome()
    {
        $images= [
            'The Kitchen' => 'https://trello-backgrounds.s3.amazonaws.com/53c07d72b387d12d2b1e1de2/256x192/468016b11f75634b6f93f7700f37018e/December_2014_046.JPG.jpg',
            'The Garden' => 'https://trello-backgrounds.s3.amazonaws.com/53c07d72b387d12d2b1e1de2/256x192/23d78e1a549011976d477f0d5cb2c61e/2014-06-23.jpg',
            'The Craft Room' => 'https://trello-backgrounds.s3.amazonaws.com/53c07d72b387d12d2b1e1de2/256x192/c905fba6c7066f70a2d7eca1b422aeca/IMG_20140614_120348.jpg',
            'The Workshop'  => 'http://cdn1.lappr.com/images/sewing-room-1280x851.jpg'
        ];
        return view('pages.welcome')->with('images', $images);
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function createContact()
    {
        return view('pages.contact');
    }

    public function storeContact()
    {

    }
}
