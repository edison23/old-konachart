<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Animu;
use Input;

class AnimuController extends Controller {

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

		$input = Input::all();
		Animu::create($input);
		return redirect(action('AnimuController@add_animu'));
	}

	// Update entry
	public function update()
	{
		// $input = Request::all();
		// dd(Input::get("id"));
		$model = Animu::find(Input::get("id")); 
		$model->fill(Input::all()); 
		$model->save(); // updateOrCreate ?
		return redirect(action('SeasonController@list_season'));
	}
}
