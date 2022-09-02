<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail(Request $request) {
        $request->validate([
            'email'         =>  'email|required',
            'subject'       =>  'string|required',
            'content'       =>  'string|required'

        ]);
        Mail::send('mail', ['content'   =>  $request->content], function($message)   use($request){
            $message->to($request->email);
            $message->subject($request->subject);
        });
        return redirect()->back()->with('success', 'Message Sent');
        
    }
}
