<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{

    /**
     * Display page the reservation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reservationPage()
    {
        return view('other.reservation');
    }


    /**
     * Display page the contacts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        return view('other.contacts');
    }


    /**
     * Sending the mail
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMail(Request $request)
    {
        $month = ($request->month)? $request->month : '';

        $dataMail = ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone,
            'count' => $request->count, 'month' => $month, 'comment' => $request->comment];

         Mail::to(Config::get('constants.mail.email_address'))
        ->send(new SendMail ($dataMail));

        return redirect()->back()->with('message', 'Письмо отправлено!');
    }


    /**
     * Display page the about us
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('other.about');
    }


    /**
     * Display page the choice of rooms
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function choice()
    {
        return view('other.choice');
    }


    /**
     * AJAX the choice of rooms
     *
     * @return array
     */
    public function answer()
    {
        $count = Input::get('count');
        $toilet = Input::get('toilet');
        $kitchen =  Input::get('kitchen');
        $result = [];

        if($count <=4)
        {
            if($toilet == 'false' && $kitchen == 'false') // санузел и кухня на этаже, до 4 чел
            {
                return $result = ['standard'];

            } elseif ($toilet == 'true' && $kitchen == 'false' && $count <=3) // санузел в номере и кухняна этаже, до 3 человек
            {
                return $result = ['lux'];

            } elseif ($toilet == 'true' && $kitchen == 'false' && $count ==4) // санузел в номере и кухня на этаже, на 4 человека
            {
                return $result = ['luxPlus'];

            } elseif ($toilet == 'true' && $kitchen == 'true' || $toilet == 'false' && $kitchen == 'true')
            {
                //санузел и туалет в номере или санузел на этаже а кухня в номере
                return $result = ['house1'];
            }

        } elseif ($count >=5) // 2 и 3 комнатные домики
        {
            return $result = ['house2'];
        }

        return $result;
    }

}
