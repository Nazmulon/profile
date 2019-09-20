<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
class MailController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function sendEmail(Request $r) {
     	$inputs = [
     		'name' =>$r->input('name'),
     		'email' =>$r->input('email'),
     		'msg' =>$r->input('message'),
     	];

     	Mail::send('mail', $inputs,function($mail) use ($inputs){
     		$mail->form($inputs['email'], $inputs['name'])
     			->to('nazmulranbagha@gmail.com', 'Nazmul Huda')
     			->message('Test mail');
     	});

     	return redirect()->back()->with('seccess', 'We receved your email form contact form');
   } 
}
