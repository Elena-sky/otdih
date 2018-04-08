<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{


    // Display 3-rooms houses
    public function fishing()
    {
        return view('houses.3rooms.fishing');

    }

    public function coast()
    {
        return view('houses.3rooms.coast');
    }
}
