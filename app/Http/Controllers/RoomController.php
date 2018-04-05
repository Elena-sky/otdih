<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function standard()
    {
        return view('rooms.standard');
    }

    public function lux()
    {
        return view('rooms.lux');
    }
}
