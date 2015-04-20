<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Str;

use App\Season;
use App\Animu;
use App\Link;

class PublicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$seasons = Season::latest()->get();
		$latest_season_id = Season::latest()->first()->id;
		$animu_and_links = $this->list_animu($latest_season_id);
		// dd($animu_and_links);
		return view('public.season')->with([
			'animus' => $animu_and_links['animu'],
			'links' => $animu_and_links['links'],
			'seasons' => $seasons
			]);
	}

	public function list_animu($id)
	{

		$latest_animu = Animu::where('season_id', '=', $id)->get();
		$links = new Link;
		// $link_arr = [];
		foreach($latest_animu as $animu) {
			$a_id = $animu->id;
			$links->$a_id = Link::where('animu_id', '=', $animu->id)->get();
		}
		$animu_and_links = ['animu'=>$latest_animu, 'links'=>$links];
		return $animu_and_links;
		// $links->fill($link_arr);
		// dd($links);
		// $links = Link::where('animu_id', '=', $latest_season_id)->get();

		// return view('public.season')->with([
		// 	'animus' => $latest_animu,
		// 	'links' => $links,
		// 	'seasons' => $seasons
		// 	]);
	}

	public function season($slug)
	{
		$seasons = Season::latest()->get();
		$season_id = Season::where('slug', '=', $slug)->get()[0]->id;
		$animu_and_links = $this->list_animu($season_id);
		// dd($animu_and_links);
		return view('public.season')->with([
			'animus' => $animu_and_links['animu'],
			'links' => $animu_and_links['links'],
			'seasons' => $seasons
			]);
	}

}
