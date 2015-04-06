<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model {

	protected $fillable = [
		'anidb',
		'konata',
		'youtube',
		'ofic',
	];
	public $timestamps = false;
}
