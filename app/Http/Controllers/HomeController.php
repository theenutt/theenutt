<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\contacts;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['contacts' => Auth::user()->contacty()->latest()->get()]);
    }

    public function submit(ContactsRequest $req) {
    Auth::user()->contacty()->create([
      'name' => $req->name,
      'email' => $req->email,
      'subject' => $req->subject,
      'message' => $req->message
    ]);
    return redirect()->route('home')->with('success', 'Сообщение добавлено');
  }
}
