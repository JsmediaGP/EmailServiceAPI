<?php

namespace App\Http\Controllers\Api;

use App\Mail\myMail;
use App\Models\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class emailcontroller extends Controller
{
    function sendmail(Request $request){
        
        
            $recipient_email = $request->input('recipient_email');
            $content = $request->input('content');

            Mail::to($recipient_email)->send(new myMail($content));
            
            $emailrecord = new Email([
                'recipient_email' => $recipient_email,
                'content' => $content,
                'time_sent' => now(),
            ]);
            $emailrecord->save();
    
    
        return response()->json(['message' => 'Email sent and details saved.']);

    }
    function index(){
        return view ("email.index");
    }

    function mailsend(Request $request){
        
        $data = $request->validate([
            'recipient_email' => 'required|email',
            'content' => 'required|string',
        ]);

       
            $recipient_email = $data['recipient_email'];
            $content = $data['content'];
      
        Mail::to($recipient_email)->send(new myMail($content));
        
        $emailrecord = new Email([
            'recipient_email' => $recipient_email,
            'content' => $content,
            'time_sent' => now(),
        ]);
        $emailrecord->save();
        session()->flash('success', 'Email sent successfully!');

        return redirect()->route('composemail');
    
    //return response()->json(['message' => 'Email sent and details saved.']);

}
}
