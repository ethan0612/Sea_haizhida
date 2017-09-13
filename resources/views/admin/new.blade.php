@extends('layouts.master')

@section('新增房间', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">新增房间</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/room/save" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="number">房号</label>
                        <div class="col-md-9">
                            <input id="number" name="number" type="text" placeholder="房间号码" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="type">房型</label>
                        <div class="col-md-9">
                            <input id="type" name="type" type="text" placeholder="复式海景双大床房" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="owner">房主</label>
                        <div class="col-md-9">
                            <input id="owner" name="owner" type="text" placeholder="房主姓名" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="rent">租金</label>
                        <div class="col-md-9">
                            <input id="rent" name="rent" type="text" placeholder="房间月租金" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="paymentTime">交租时间</label>
                        <div class="col-md-9">
                            <input id="paymentTime" name="paymentTime" type="text" placeholder="交给房主租金日期" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="phone">房主电话</label>
                        <div class="col-md-9">
                            <input id="phone" name="phone" type="text" placeholder="手机号" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="card">房主卡号</label>
                        <div class="col-md-9">
                            <input id="card" name="card" type="text" placeholder="房主银行卡号" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="bank">开户行</label>
                        <div class="col-md-9">
                            <input id="bank" name="bank" type="text" placeholder="银行开户行" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">房间描述</label>
                        <div class="col-md-9">
                            <textarea placeholder="可自行补充房间其他信息以便管理" class="form-control" id="textarea" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">图片URL</label>
                        <div class="col-md-9">
                            <input id="imageurl" name="imageurl" type="text" placeholder="房间图片链接" class="form-control input-md" >

                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-3 control-label" for="file">文件</label>--}}
                        {{--<div class="col-md-9">--}}
                            {{--<input id="file" name="file" class="input-file" type="file">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">提交</button>
                        </div>
                    </div>

                </fieldset>

            </form>
        </div>
    </div>
@endsection