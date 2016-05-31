@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增栏目</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ URL('admin/categories') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            栏目名: <input type="text" name="name" class="form-control" required="required">
                            <br>
                            缩略图:
                            <button class="btn btn-sm btn-success" type="button" id="loading">
                                <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>&nbsp;选择要上传的图片
                            </button>
                            <input type="file" id="thumb_upload" style="opacity: 0;">
                            <input type="hidden" name="thumb">
                            <br>
                            图片预览：
                            <img src="" id="img_show" style="max-height: 150px;">
                            <br>
                            <hr>
                            描述:
                            <textarea name="desc" rows="5" class="form-control" required="required"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info">提交</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--文件上传--}}
    <script src="/assets/js/jquery.html5-fileupload.js"></script>
    <script src="/assets/js/upload.js"></script>
@endsection