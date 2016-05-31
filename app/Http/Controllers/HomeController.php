<?php namespace App\Http\Controllers;

use App\Page;
use App\Ad;
use App\Category;

class HomeController extends Controller
{

	public function index()
	{
		$pages=Page::orderBy('created_at','desc')->take(5)->get();
		$slides=Ad::all();
		$categories=Category::all();
		return view('home.index')->with(['pages'=>$pages,'slides'=>$slides,'categories'=>$categories,'index'=>'active']);
	}
	
}
