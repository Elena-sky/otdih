<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Category;
use Illuminate\Http\Request;

class MailController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Mail::all();

        return view('admin.mailbox.index', compact('letters'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $letters = Mail::onlyTrashed()->get();

        return view('admin.mailbox.trashed', compact('letters'));
    }

    /**
     * Remove the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mail::find($id)
            ->delete();

        return redirect()->route('mail::index');
    }

    /**
     * Restore the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Mail::onlyTrashed()
            ->where('id', $id)
            ->restore();

        return redirect()->route('mail::trashed');
    }

    /**
     * ForceDelete the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        Mail::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();

        return redirect()->route('mail::trashed');
    }







}
