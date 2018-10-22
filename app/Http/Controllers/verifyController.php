<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class verifyController extends Controller
{
    public function verify($token){

    	$user = User::where('token', $token)->firstOrFail()
    	   ->update(['token' => null]);

    	   return http_redirect()
    	   ->route('homepage')
    	   ->with('success', 'Account verified');
    }
}
