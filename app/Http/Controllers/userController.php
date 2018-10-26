<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{

    public function signup(Request $req){

        $this->validate($req,
            [
                'email'=>'required',
                'password'=>'required|min:8',
                'fname' =>'required|min:3',
                'lname' =>'required|min:3',
                'phone' =>'required|min:11|max:11',
            ]
            );

        $user = new User;
        $user->first_name = $req->fname;
        $user->last_name = $req->lname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->role = "client";
        $user->password = $req->password;
        $user->save();
        Auth::login($user);

        return redirect("/");

    }

    public function login(Request $req){
        $this->validate($req,
            [
                'email'=>'required|exists:users',
                'password'=>'required|exists:users'
            ]
            );
        $email = $req->email;
        $pass = $req->password;
        $user = User::where("email" , $email)->where("password" , $pass)->get()->first();
        if($user){
            Auth::login($user);
            return redirect("/");
        }

    }

    public function get_all_users(){
     
        $users = User::all();
        return view('homePage' , ['users' => $users]);
    }

    public function userProfile($id){   
        $reviews=review::all();
        $user = User::find($id);
        if(!$user){
            abort(404);
        }
        return view('profile_settings' , ['user' => $user],compact('reviews'));
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
       
        // return redirect('profile/');
        
        return view('profile_settings' , ['user'=>$user]);
    }

    public function review(Request $req){
        $comment  = $req->comment;
        $id       = $req->user_id;
        $space_id = $req->space_id;

        $review = new review;
        $review->comment = $comment;
        $review->user_id = $id;
        $review->space_id = $space_id;

        $review->save();
        return redirect("space");
 
    }

public function display_reviews_workspace(){
    $reviews=review::all();
    return view('working_space',compact('reviews'));
}

}