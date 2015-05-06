<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Staff;
use Illuminate\Http\Request;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('admin.index');
	}

    public function staff()
    {
        $staff = Staff::all();

        return view('admin.staff')->with('staff', $staff);
    }
}
