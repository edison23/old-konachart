<?php namespace App\Http\Controllers;


use App\Season;
use Requests;
use App\Http\Controllers\Controller;

/**
 * use Illuminate\Http\Request; 
 * no idea why it's not working with this (throws Non-static method 
 * Illuminate\Http\Request::all() should not be called statically)
 */
use Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all seasons and return view
		$seasons = Season::latest()->get();
		return view('admin.dashboard')->with('seasons', $seasons);
	}




	

}
