<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Room extends Model
{
    protected $table = 'room_management';

    public function getRooms()
    {
        return DB::table('room_management')->get();
    }

    public function getSelectedRoom($id)
    {
        return DB::table('room_management')->where('id',$id)->get();
    }

    public function addRooms($room_num, $room_type, $owner, $rent, $payment_time, $owner_phone, $card, $bank, $room_desc, $imageurl)
    {
        return DB::table('room_management')->
                   insertGetId(
                    [
                    'room_num'          => $room_num,
                    'room_type'         => $room_type,
                    'owner'             => $owner,
                    'rent'              => $rent,
                    'payment_time'      => $payment_time,
                    'owner_phone'       => $owner_phone,
                    'owner_credit_card' => $card,
                    'bank'              => $bank,
                    'room_desc'         => $imageurl,
                    'imageurl'          => $room_desc,
                    ]
        );
    }

    public function updateRoom()
    {
        return DB::table('room_management')->
                   where('id',1003)->
                   update(['age'=>30]);
    }
}
