<?php

namespace App\Http\Controllers;

use App\Room;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

//use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    // 获取所有房间信息
    public function index(){
        $model = new \App\Room; //实例化model
        $data  = $model -> getRooms();
        return view('admin.room',['rooms' => $data]);
    }

    // 删除房间
    public function destroy($id){
        Room::destroy($id);
        return redirect('/admin/room');
    }

    // 新增房间
    public function newProduct(){
        return view('admin/new');
    }

    // 添加并保存房间
    public function add() {
        $model  = new \App\Room;
        $room_num     = Request::input('number');
        $room_type    = Request::input('type');
        $owner        = Request::input('owner');
        $rent         = Request::input('rent');
        $payment_time = Request::input('paymentTime');
        $owner_phone  = Request::input('phone');
        $card         = Request::input('card');
        $bank         = Request::input('bank');
        $room_desc    = Request::input('description');
        $imageurl     = Request::input('imageurl');

        $room = $model -> addRooms($room_num, $room_type, $owner, $rent, $payment_time, $owner_phone, $card,
                                   $bank, $room_desc, $imageurl);
        // $room 返回插入成功的ID


        return redirect('/admin/room');

    }

    // 修改房间
    public function update($id){
        $model = new \App\Room; //实例化model
        $data  = $model -> getSelectedRoom($id);

        echo $data;
        die;
        Room::update($id);
        return redirect('/admin/room');
    }

}
