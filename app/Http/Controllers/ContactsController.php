<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\contacts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{



    public function submit(ContactsRequest $req)  {
        /*$contacts = new contacts;
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save(); */
        Auth::user()->contacty()->create([
          'name' => $req->name,
          'email' => $req->email,
          'subject' => $req->subject,
          'message' => $req->message
        ]);
        return redirect()->route('home')->with('success', 'Сообщение добавлено');
   }

   public function allData() {
      return view ('messages',['data'=>contacts::all()]);
   }

   public function showmes($id) {
     $contacts = new contacts;
      return view ('ViewShowmes',['data'=>contacts::find($id)]);
   }

   public function editmes($id) {
     $contacts = new contacts;
      return view ('ViewEditmes',['data'=>contacts::find($id)], ['userdata' => Auth::user()->contacty()->latest()->get()]);
   }

   public function editmessub($id, ContactsRequest $req)  {
        if ((Auth::user()->id) == (contacts::find($id)->user_id)) {
       $contacts = contacts::find($id);
       $contacts->name = $req->input('name');
       $contacts->email = $req->input('email');
       $contacts->subject = $req->input('subject');
       $contacts->message = $req->input('message');

       $contacts->save();
       return redirect()->route('contact-showmes', $id)->with('success', 'Сообщение отредактировано');
      }
      else return redirect()->route('home')->with('success', 'Сообщение не отредактировано');
    }

     public function deletemes($id)  {
       if ((Auth::user()->id) == (contacts::find($id)->user_id)) {
         contacts::find($id)->delete();

         return redirect()->route('contact-data')->with('success', 'Сообщение удалено');
       }
       else return redirect()->route('contact-data')->with('success', 'Сообщение не удалено');
     }
}
