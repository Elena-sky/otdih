<?php

namespace App\Http\Controllers;

use App\ContactPhones;
use Illuminate\Http\Request;

class ContactPhoneController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'telephone_call' => 'required',
        ]);

        ContactPhones::create($request->except('_token'));

        //Display a successful message
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ContactPhones::find($id);
        $category->delete();

        //Display a successful message
        return redirect()->route('dashboard');
    }
}
