@extends('layouts.master')

@section('商品列表', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $room)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{$room->imageurl}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>房间{{$room->room_num}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <h4>{{$room->room_type}}</h4>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h4>
                                            <label>￥{{$room->rent}}</label></h4>
                                    </div>
                                </div>
                                <p>{{$room->room_desc}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/addProduct/{{$room->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> 购买</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection