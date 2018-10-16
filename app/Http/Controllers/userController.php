<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user as user;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    //
    public function get_all_users(){
        // $users = DB::table('users')->get();
    return view("homePage"/*, ["users"=>$users]*/);
    }
}
