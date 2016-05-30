<?php namespace App\Http\Controllers;

use App\Page;

class HomeController extends Controller
{

	public function index()
	{
		return view('home.index')->withPages(Page::take(5)->get());
	}
	
}
