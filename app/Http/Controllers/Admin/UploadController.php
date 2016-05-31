<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UploadController extends Controller {

	/**
	 *文件上传.
	 *
	 * @return $result
	 */
	public function upload(Request $request)
	{

		if ($request->hasFile('Filedata') and $request->file('Filedata')->isValid()) {

			$result = array();

			//文件类型
			$allow = array('jpg', 'jpeg', 'png', 'gif');
			$mine = $request->file('Filedata')->getClientOriginalExtension();
			if (!in_array($mine, $allow)) {
				$result['status'] = 0;
				$result['info'] = '文件类型错误，只能上传图片';
				return $result;
			}

			//文件大小判断
			$max_size = 1024 * 1024 * 3;
			$size = $request->file('Filedata')->getClientSize();
			if ($size > $max_size) {
				$result['status'] = 0;
				$result['info'] = '文件大小不能超过3M';
				return $result;
			}

			//上传文件夹，如果不存在，建立文件夹
			$date = date("Y_m");
			$path = getcwd() . '/upload/images/' . $date;
			if (!is_dir($path)) {
				mkdir($path, 0777, true);
			}

			//生成新文件名
			$extension = $request->file('Filedata')->getClientOriginalExtension();
			$file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $extension;
			$request->file('Filedata')->move($path, $file_name);

			//返回新文件名
			$result['status'] = 1;
			$result['info'] = '/upload/images/' . $date . '/' . $file_name;
			return $result;
		}
	}

}
