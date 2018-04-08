<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{


    // Display 2-rooms houses


    public function lime()
    {
        return view('houses.2rooms.lime');
    }

    public function lilac()
    {
        return view('houses.2rooms.lilac');
    }


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
