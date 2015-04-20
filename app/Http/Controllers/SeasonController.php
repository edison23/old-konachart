<?php namespace App\Http\Controllers;


use App\Season;
use Requests;
use Redirect;
use App\Http\Controllers\Controller;
use Str;

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

	// Add season
	public function edit_season($id)
	{
		$season = Season::findOrFail($id);
		return view('admin.edit-season')->with('season', $season);;
	}


	public function store()
	{
		$input = Input::all();
		$model = new Season;
		$model->fill($input);
		$model->slug = Str::slug($model->name);
		$model->save();
		return redirect(action('AdminController@index'));
	}

	// Update entry
	public function update()
	{
		$model = Season::find(Input::get("id"));
		$model->fill(Input::all());
		$model->slug = Str::slug($model->name);
		$model->save(); // updateOrCreate ?
		return redirect(action('AdminController@index'));
	}

	public function delete_season($id)
	{
		if(Animu::where('season_id', '=', $id) -> exists())
		{
			return Redirect::back()->with('error', 'Sezónu nelze smazat, protože není prázdná.');
		}
		else {
			$season = Season::findOrFail($id);
			$season->delete();
			return Redirect::back()->with('success', 'Sezóna smazána.');
		}
	}

	public function list_season($id)
	{
		$season_animus = Animu::where('season_id', '=', $id)->get();
		$season_title = Season::findOrFail($id)->name;

		return view('admin.list-season')->with(
			[
				'season' => $season_animus, 
				'id' => $id,
				'title' => $season_title
			]
			);
	}

}
