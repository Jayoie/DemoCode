@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">管理广告</div>

                    <div class="panel-body">

                        <a href="{{ URL('admin/ads/create') }}" class="btn btn-lg btn-primary">新增</a>
                        <hr>

                        <table class="table table-striped">
                            <tr class="row">
                                <th class="col-lg-4">Title</th>
                                <th class="col-lg-2">Thumb</th>
                                <th class="col-lg-4">Desc</th>
                                <th class="col-lg-1">编辑</th>
                                <th class="col-lg-1">删除</th>
                            </tr>
                            @foreach ($ads as $ad)
                                <tr class="row">
                                    <td class="col-lg-6">
                                        {{ $ad->title}}
                                    </td>
                                    <td class="col-lg-2">
                                        {{ $ad->thumb }}
                                    </td>
                                    <td class="col-lg-4">
                                        {{ $ad->desc }}
                                    </td>
                                    <td class="col-lg-1">
                                        <a href="{{ URL('admin/ads/'.$ad->id.'/edit') }}"
                                           class="btn btn-success">编辑</a>
                                    </td>
                                    <td class="col-lg-1">
                                        <form action="{{ URL('admin/ads/'.$ad->id) }}" method="POST"
                                              style="display: inline;">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection