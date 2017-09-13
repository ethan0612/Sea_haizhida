@extends('layouts.master')

@section('商店后台', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/room/new"><button class="btn btn-success">新增房间</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td>房号</td>
                    <td>房型</td>
                    <td>房主</td>
                    <td>房主电话</td>
                    <td>租金</td>
                    <td>交租时间</td>
                    <td>操作</td>
                    </thead>
                    <tbody>
                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{$room->room_num}}</td>
                            <td>{{$room->room_type}}</td>
                            <td>{{$room->owner}}</td>
                            <td>{{$room->owner_phone}}</td>
                            <td>￥{{$room->rent}}</td>
                            <td>{{$room->payment_time}}</td>
                            {{--<td>{{$room->file->original_filename}}</td>--}}
                            <td>
                                <a href="/admin/room/update/{{$room->id}}"><button class="btn btn-warning active">修改</button></a>
                                <a href="/admin/room/destroy/{{$room->id}}"><button class="btn btn-danger active">删除</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection