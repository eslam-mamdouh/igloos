<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
class MailController extends Controller
{
    //

    public function send_code(Request $req){

        $user = User::where("email",$req->email)->first();
        if(!$user){
            abort(404);
        }
        $code = rand(100000 , 999999);
        $user->token = $code;
        $user->update();
        $email= $user->email;
        $name= $user->first_name;
        session(["code"=>$code]);
        $data = array('email'=>$email);
        Mail::send('code', $data, function($message) {
           $message->to($email, "$name")->subject
              ('Verfication Code');
           $message->from('droidk00@gmail.com','Igloos');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
}
