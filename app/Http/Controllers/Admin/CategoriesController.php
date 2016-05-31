<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller {

	/**
	 * 栏目首页
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.categories.index')->withCategories(Category::all());
	}

	/**
	 * 新增栏目
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Category::create($request->all());
		return redirect(route('admin.categories.index'));
	}

	/**
	 * 编辑栏目.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.categories.edit')->withCategory(Category::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$category=Category::find($id);
		$category->update($request->all());
		return view('admin.categories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);
		return back();
	}

}
