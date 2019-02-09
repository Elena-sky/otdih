<?php

namespace App\Http\Controllers;

use App\ContactPhones;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $phones = ContactPhones::all();
        return view('admin/dashboard', compact('phones'));
    }

}
