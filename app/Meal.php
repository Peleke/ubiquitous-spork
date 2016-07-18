<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
	/**
	 * Attributes that are mass-assignable.
	 */
	protected $fillable = ['name'];
}
