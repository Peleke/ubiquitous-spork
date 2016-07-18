<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
	public function index(Request $request)
	{
		return view('welcome')->withUser($request->user());
	}
}
