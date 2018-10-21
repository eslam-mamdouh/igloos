<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    pupblic function login(Request $request){
    	$username = $req->input('username');
    	$password = $req->input('password');

    	$checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
    	if (count($checkLogin) > 0) {
    		echo "Login Success";
    	}
    	else{
    		echo "Login failed";
    	}

    }
}
