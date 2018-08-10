<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;



class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactRequest $request)
    {
        //dd($request->only('name', 'email', 'message'));

        $message = Message::create($request->only('name', 'email', 'message'));

        //$message->save();

        $mailable = new ContactMessageCreated($message);
        Mail::to(config('saleby.admin_support_email'))->send($mailable);

        flashy('Nous vous repondrons dans les plus brefs dalis.');

        return redirect()->route('root_path');
    }
}
