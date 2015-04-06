<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Season;
use App\Animu;

class PublicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$latest_season_id = Season::latest()->first()->id;
		$latest_animu = Animu::where('season_id', '=', $latest_season_id)->get();
		// dd($latest_animu);
		return view('public.season')->with('animus', $latest_animu);
	}

}
