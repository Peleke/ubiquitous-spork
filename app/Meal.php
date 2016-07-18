<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	/**
	 * Attributes that are mass-assignable.
	 */
	protected $fillable = ['name'];

	public function foods()
	{
		return $this->hasMany(Food::class);
	}
}
