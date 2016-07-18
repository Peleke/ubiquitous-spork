<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

class WelcomeController extends Controller
{
	public function index(Request $request)
	{
		$user  = $request->user();
		$meals = $user->meals()
					  ->whereDate('created_at', '=', Carbon::today()->toDateString())
					  ->get();

		return view('welcome', compact('user', 'meals'));
	}
}
