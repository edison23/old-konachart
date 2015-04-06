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

	// Add animu
	public function add_animu()
	{
		return view('admin.add-animu');
	}

	// Edit entry
	public function edit_animu($id)
	{
		$animu = Animu::findOrFail($id);
		return view('admin.edit-animu')->with('animu', $animu);
	}

	// Store new entry
	public function store()
	{
		// $input = Request::all();
		// $animu = new Animu($input);
		// $animu->save();

		$input = Request::all();
		Animu::create($input);
		return redirect(action('SeasonController@add_animu'));
	}

	// Update entry
	public function update()
	{
		$input = Request::all();
		// dd(Input::get("id"));
		$animu = new Animu($input);
		$animu->save();
	}

}
