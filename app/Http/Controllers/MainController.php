<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{
    public function reservationPage()
    {
        return view('other.reservation');
    }

    public function contacts()
    {
        return view('other.contacts');
    }

    public function sendMail(Request $request)
    {
        $month = ($request->month)? $request->month : '';

        $dataMail = ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone,
            'count' => $request->count, 'month' => $month, 'comment' => $request->comment];

         Mail::to(Config::get('constants.mail.email_address'))
        ->send(new SendMail ($dataMail));

        return redirect()->back()->with('message', 'Письмо отправлено!');

    }

}
