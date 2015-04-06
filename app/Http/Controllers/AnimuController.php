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
		$links = Link::where('animu_id', '=', $id)->get(); //this breakes when no links
		// dd($links);
		return view('admin.edit-animu')->with(
			[
				'animu' => $animu,
				'links' => $links[0]
			]);
	}

	// Store new entry
	public function store($id)
	{
		$input = Input::all();
		// with(new Animu($input))->save();
		$a = new Animu;
		$a->fill($input);
		$a->save();
		
		$latest_id = Animu::latest('id')->first()->id;
		
		$n = new Link();
		$n->fill($input);
		$n->animu_id = $latest_id;
		$n->save();
		return redirect(action('AnimuController@add_animu', $id));
	}

	// Update entry
	public function update()
	{
		// $input = Request::all();
		// dd(Input::get("id"));
		$a = Animu::findOrFail(Input::get('id')); 
		$a->fill(Input::all()); 

		$l = Link::where('animu_id', '=', Input::get('id'))->get()[0];
		$l->fill(Input::all());
		$l->save();
		return redirect(action('SeasonController@list_season', $a->season_id));
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
