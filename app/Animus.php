<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Animus extends Model {

	protected $fillable = [
		'title',
		'studio',
		'desc',
		'release',
		'img',
	];

}
