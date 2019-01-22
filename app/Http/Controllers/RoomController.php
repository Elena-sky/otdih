<?php

namespace App\Http\Controllers;

use App\Room;
use App\Category;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    private $exampleTxt = 'Заголовок колонки: 1 параметр; 2 параметр, 2.1 параметр, 2.2 параметр; 3 параметр;';

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $categories = Category::all();

        return view('admin.rooms.index', compact('categories', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        $exampleTxt = $this->exampleTxt;
        $example = '';
        $categoryId = $request['categoryId'];

        return view('admin.rooms.create', compact('categories', 'example', 'exampleTxt', 'categoryId'));
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
            'name' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'category_id' => 'required'
        ]);

        Room::create($request->except('_token'));

        //Display a successful message
        return redirect()->route('room::create')
            ->with('status', 'Номер - ' . $request['name'] . ' созданна');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $room = Room::find($id);
        $exampleTxt = $this->exampleTxt;
        $example = '';

        return view('admin.rooms.edit', compact('room', 'categories', 'example', 'exampleTxt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'category_id' => 'required'
        ]);
        $request['status'] = isset($request['status'])?: 0 ;

        $item = Room::findOrFail($id);
        $item->update($request->except('_token'));

        //Display a successful message
        return redirect()->route('room::index')
            ->with('status', 'Номер - ' . $request['name'] . ' сохранен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $roomName = $room['name'];
        $room->delete();

        //Display a successful message
        return redirect()->route('room::index')
            ->with('status', 'Номер - ' . $roomName . ' удален');
    }
}
