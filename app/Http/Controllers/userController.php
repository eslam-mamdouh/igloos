<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class userController extends Controller
{
    public function get_all_users(){
        $users = User::all();
        return view('homePage' , ['users' => $users]);
    }

    public function userProfile($id){
        $user = User::find($id);
        if(!$user){
            abort(404);
        }
        return view('profile_settings' , ['user' => $user]);
    }

    public function profileUpdate(Request $req , $id){

        $user = User::find($id);
        if(!$user){
            abort(404);
        }
        
        $user->first_name   = $req->first_name ;
        $user->last_name    = $req->last_name ;
        $user->email        = $req->email ;
        $user->password     = $req->password ;
        $user->phone        = $req->phone;
        $user->update();
        return view('profile_settings');
    }

    public function review(Request $req){
        $comment = $req->comment;
        $id = $req->userid;
        $space_id = $req->spaceid;

        $review = new review;
        $review->comment = $comment;
        $review->user_id = $id;
        $review->space_id = $space_id;

        $review->save();
        return redirect("/");
    }
}
