<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User
class registerController extends Controller
{
    public function register(Request $request){
        $this->validate($request, [
        	'Fname'=>'required',
        	'Lname'=>'required',
        	'username'=>'required',
        	'email'=>'required',
        	'phone'=>'required',
        	'password'=>'required',
        	'Conpassword'=>'required'
        ]);

        $users = new User;
        $users->first_name = $request->input('Fname');
        $users->last_name = $request->input('Lname');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->password = $request->input('password');
        $users->conpassword = $request->input('Conpassword');
        $users->save();
        return redirect('/')->with('response', 'Signup Successfully');

    }
}
