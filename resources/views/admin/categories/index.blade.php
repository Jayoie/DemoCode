@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">管理栏目</div>

                    <div class="panel-body">

                        <a href="{{ URL('admin/categories/create') }}" class="btn btn-lg btn-primary">新增</a>
                        <hr>

                        <table class="table table-striped">
                            <tr class="row">
                                <th class="col-lg-4">Name</th>
                                <th class="col-lg-2">Thumb</th>
                                <th class="col-lg-4">Desc</th>
                                <th class="col-lg-1">编辑</th>
                                <th class="col-lg-1">删除</th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr class="row">
                                    <td class="col-lg-4">
                                        {{ $category->name}}
                                    </td>
                                    <td class="col-lg-4">
                                        <img src="{{ $category->thumb}}" style="max-height: 100px;">
                                    </td>
                                    <td class="col-lg-4">
                                        {{ $category->desc }}
                                    </td>
                                    <td class="col-lg-1">
                                        <a href="{{ URL('admin/categories/'.$category->id.'/edit') }}"
                                           class="btn btn-success">编辑</a>
                                    </td>
                                    <td class="col-lg-1">
                                        <form action="{{ URL('admin/categories/'.$category->id) }}" method="POST" style="display: inline;">
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