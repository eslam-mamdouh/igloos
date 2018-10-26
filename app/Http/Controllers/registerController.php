<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registerController extends Controller
{
    public function register(Request $request){
        // $this->validate($request, [
        // 	'fname'=>'required',
        // 	'lname'=>'required',
        // 	// 'username'=>'required',
        // 	'email'=>'required',
        // 	// 'phone'=>'required',
        // 	'password'=>'required',
        // 	'conpassword'=>'required'
        // ]);

        $users = new User;
        $users->first_name = $request->input('fname');
        $users->last_name = $request->input('lname');
        // $users->username = $request->input('username');
        $users->email = $request->input('email');
        // $users->phone = $request->input('phone');
        $users->password = $request->input('password');
        // $users->conpassword = $request->input('conpassword');
        $users->save();
        die("jggh");
        return redirect('/')->with('response', 'Signup Successfully');

    }
}
