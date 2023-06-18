<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    }

    public function StoreMessage(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your Message has been sent Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //End store contact message 

    public function ContactMessage(){

        $contacts = Contact::latest()->get();
        return view('admin.contact.allcontact', compact('contacts'));

    }//End contact message method to view messages

    public function DeleteMessage($id){

        Contact::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Message Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End contact message method for delete

    Public function OpenMessage($id){
        $contacts = Contact::findOrFail($id);
        return view('admin.contact.open_message', compact('contacts'));
    }

}