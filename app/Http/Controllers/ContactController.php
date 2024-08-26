<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    public function submit(ContactRequest $reg)
    {
        $contact = new Contact();
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();


        return redirect()->route('show-all');
    }

    public function show()
    {
       // return Contact::all();
return view('contact',['contacts'=>Contact::all()]);
    }




}
