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
use Input;
use App\Animu;

class SeasonController extends Controller {

	// Add season
	public function add_season()
	{
		return view('admin.add-season');
	}

	public function store()
	{
		// get form data
		// return("penis");
		$input = Request::all();
		
		// save them to DB
		Season::create($input);
		//redirect to main admin pg
		return redirect(action('AdminController@index'));
	}

	public function list_season($id)
	{
		$season_animus = Animu::where('season_id', '=', $id)->get();
		// return $season_animus;
		// dd($season_animus);
		return view('admin.list-season')->with('season', $season_animus);
	}

}
