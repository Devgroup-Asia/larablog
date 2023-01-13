<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'This is a demo!',
            'body' => 'This is a test!'
        ];

        Mail::to('nurdin@deepagi.com')->send(new TestMail($mailData));

        dd("Email is sent successfully.");
    }
}
