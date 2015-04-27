<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        $data = [
            'first' => 'Matthew',
            'last' => 'Dahl',
            'people' => [
                'Jennifer Petersen',
                'Stanley Buchmiller',
                'Brandon Johnson',
                'Bryan Graves'
                ]
            ];
        return view('pages.about')->with($data);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }
}
