<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Animu;
use App\Season;
use App\Link;
use Input;
use Redirect;

class AnimuController extends Controller {

	// Add animu
	public function add_animu($id)
	{
		$season = Season::findOrFail($id);
		return view('admin.add-animu')->with('season', $season);
	}

	// Edit entry
	public function edit_animu($id)
	{
		$animu = Animu::findOrFail($id);
		return view('admin.edit-animu')->with('animu', $animu);
	}

	// Store new entry
	public function store($id)
	{
		$input = Input::all();
		// dd($input['release_date']);
		// Animu::create($input);
		// $latest_id = Animu::latest('id')->first()->id;
		// $latest_id = 33;
		// $input += ['animu_id'=>intval($latest_id)];
		// dd($input);
		// Link::create($input);
		Link::create(array('konata' => 'KON', 'ofic' => 32, 'animuId' => 132, 'anidb' => 'ANDB'));
		return redirect(action('AnimuController@add_animu', $id));
	}

	// Update entry
	public function update()
	{
		// $input = Request::all();
		// dd(Input::get("id"));
		$model = Animu::find(Input::get('id')); 
		$model->fill(Input::all()); 
		$model->save(); // updateOrCreate ?
		return redirect(action('SeasonController@list_season', $model->season_id));
	}

	public function delete($id)
	{
		$animu = Animu::findOrFail($id);
		// $season_id = $animu->season_id;
		$animu->delete();
		// dd($animu->season_id);
		return Redirect::back()->with('success', 'Série smazána.');
		// return redirect(action('SeasonController@list_season', $animu->season_id));
	}
}
