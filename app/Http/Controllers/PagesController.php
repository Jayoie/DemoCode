<?php namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller {
  
  public function index()
  {
    return view('home.pages')->withPages(Page::orderBy('created_at','desc')->paginate(config('jay_zhou.page_size')))->with(["new"=>"active"]);
  }

  public function show($id)
  {
    return view('pages.show')->withPage(Page::find($id));
  }

}
