<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use App\ContactPhones;


class MainController extends Controller
{
    private $options = [];


    /***
     * MainController constructor.
     */
    public function __construct()
    {
        $this->options['phones'] = ContactPhones::all();
        $this->options['viber'] = ContactPhones::where('viber', 1)->get();
        $this->options['categories'] = Category::all();
        $this->options['rooms'] = Room::all();
    }

    /**
     * Display page the reservation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        $options = $this->options;

        return view('index', compact('options'));
    }

    /**
     * Display page the reservation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function reservationPage()
    {
        $options = $this->options;

        return view('other.reservation', compact('options'));
    }


    /**
     * Display page the contacts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contacts()
    {
        $options = $this->options;

        return view('other.contacts', compact('options'));
    }


    /**
     * Sending the mail
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email'
        ]);

        Mail::create($request->except('_token'));

        return redirect()->back()->with('message', 'Письмо отправлено!');
    }


    /**
     * Display page the about us
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        $options = $this->options;

        return view('other.about', compact('options'));
    }


    /**
     * Display page the choice of rooms
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function choice()
    {
        $options = $this->options;

        return view('other.choice', compact('options'));
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
        $kitchen = Input::get('kitchen');
        $result = [];

        if ($count <= 4) {
            if ($toilet == 'false' && $kitchen == 'false') // санузел и кухня на этаже, до 4 чел
            {
                return $result = ['standard'];

            } elseif ($toilet == 'true' && $kitchen == 'false' && $count <= 3) // санузел в номере и кухняна этаже, до 3 человек
            {
                return $result = ['lux'];

            } elseif ($toilet == 'true' && $kitchen == 'false' && $count == 4) // санузел в номере и кухня на этаже, на 4 человека
            {
                return $result = ['luxPlus'];

            } elseif ($toilet == 'true' && $kitchen == 'true' || $toilet == 'false' && $kitchen == 'true') {
                //санузел и туалет в номере или санузел на этаже а кухня в номере
                return $result = ['house1'];
            }

        } elseif ($count >= 5) // 2 и 3 комнатные домики
        {
            return $result = ['house2'];
        }

        return $result;
    }


    /**
     * Display page of the room
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function room($id)
    {
        $options = $this->options;
        $room = Room::find($id);
        $room['sub_title'] = explode(',', $room['sub_title']);
        $room['column_one'] = $this->stringToColumn($room['column_one']);
        $room['column_two'] = $this->stringToColumn($room['column_two']);

        return view('room', compact('room', 'options'));
    }

    /**
     * Create html for options of room
     *
     * @param $string
     * @return string
     */
    private function stringToColumn($string)
    {
        $firstLevel = explode(':', $string);
        $secondLevel = explode(';', $firstLevel[1]);

        $html = "<h4> " . ltrim($firstLevel[0]) . "</h4>";
        $html = $html . "<nav class=\"sdb_holder\"><ul>";

        foreach ($secondLevel as $item) {
            if (strpos($item, ',')) {
                $thirdLevel = explode(',', $item);

                $html = $html . "<li><span class=\"fa fa-check-square-o\"></span> " . ltrim($thirdLevel[0]) . "<ul class=\"li-2-level\">";

                foreach ($thirdLevel as $key => $item) {
                    $html = ($key == 0) ? $html . "" : $html . "<li>• " . ltrim($item) . "</li>";
                }

                $html = $html . "</ul></li>";

            } else {
                $html = $html . "<li><span class=\"fa fa-check-square-o\"></span> " . ltrim($item) . "</li>";
            }
        }

        $html = $html . "</ul></nav>";

        return $html;
    }
}
