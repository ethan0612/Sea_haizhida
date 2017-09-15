@extends('layouts.master')

@section('更新房间', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">更新房间</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/room/save" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                @foreach ($products as $room)
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="number">房号</label>
                        <div class="col-md-9">
                            <input id="number" name="number" type="text" placeholder="{{$room->room_num}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="type">房型</label>
                        <div class="col-md-9">
                            <input id="type" name="type" type="text" placeholder="{{$room->room_type}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="owner">房主</label>
                        <div class="col-md-9">
                            <input id="owner" name="owner" type="text" placeholder="{{$room->owner}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="rent">租金</label>
                        <div class="col-md-9">
                            <input id="rent" name="rent" type="text" placeholder="{{$room->rent}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="paymentTime">交租时间</label>
                        <div class="col-md-9">
                            <input id="paymentTime" name="paymentTime" type="text" placeholder="{{$room->payment_time}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="phone">房主电话</label>
                        <div class="col-md-9">
                            <input id="phone" name="phone" type="text" placeholder="{{$room->owner_phone}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="card">房主卡号</label>
                        <div class="col-md-9">
                            <input id="card" name="card" type="text" placeholder="{{$room->owner_credit_card}}" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="bank">开户行</label>
                        <div class="col-md-9">
                            <input id="bank" name="bank" type="text" placeholder="{{$room->bank}}" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">房间描述</label>
                        <div class="col-md-9">
                            <textarea placeholder="{{$room->room_desc}}" class="form-control" id="room_desc" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">图片URL</label>
                        <div class="col-md-9">
                            <input id="imageurl" name="imageurl" type="text" placeholder="{{$room->imageurl}}" class="form-control input-md" >

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>

                </fieldset>
                @endforeach
            </form>
        </div>
    </div>
@endsection