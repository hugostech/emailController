<?php

namespace App\Http\Controllers;

use App\customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function sendEmail(Request $request){
        $email_content = $request->input('email_content');
        if(!empty(trim($email_content))){
            $subject = $request->input('email_subject');
            $customers = customer::all();
            foreach($customers as $key=>$customer){
//                echo .' '.$customer->email.' '.$subject;
                $name = $customer->first_name.' '.$customer->last_name;
//                self::mailSend($name,$customer->email,$email_content,$subject);
                echo ' <del>'.$customer->email.'</del>'.$key.'<br> ';

            }
            self::mailSend('Hugo Wang','a366232446@gmail.com',$email_content,$subject);
        }
    }

    public function console(){
        return view('console');
    }

    public function mailSend($name,$email,$email_content,$subject){

        Mail::send('emails.newsletter', compact('name','email_content'), function ($m) use ($email,$subject,$name) {
            $m->from('marketing@roctech.co.nz', 'ExtremePC-Make IT ready');

            $m->to($email,$name)->subject($subject);
        });
    }
}
