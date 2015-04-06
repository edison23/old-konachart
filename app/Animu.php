<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Animu extends Model {

		protected $fillable = [
		'season_id',
		'title',
		'studio',
		'description',
		'release',
		'img',
	];
	public $timestamps = false;

}
