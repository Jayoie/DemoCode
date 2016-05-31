<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ad;

use Illuminate\Http\Request;

class AdsController extends Controller {

	/**
	 * 广告首页
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.ads.index')->withAds(Ad::all());
	}

	/**
	 * 新增广告
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.ads.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Ad::create($request->all());
		return redirect(route('admin.ads.index'));
	}

	/**
	 * 编辑广告.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin.ads.edit')->withAd(Ad::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$ad=Ad::find($id);
		$ad->update($request->all());
		return redirect(route('admin.ads.index'));
	}

	/**
	 * 删除广告.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ad::destroy($id);
		return back();
	}

}
