<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;

class MainController extends Controller
{
    public function index()
    {
//        $products = Product::all();
        $rooms = Room::all();
        return view('main.index',['products' => $rooms]);

    }
}
