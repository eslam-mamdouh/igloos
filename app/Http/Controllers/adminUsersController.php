<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\review;
class adminUsersController extends Controller
{
    //
    public function getUsers(){
        $users = User::paginate(5);
        return view('admin.users' , ['users'=>$users]);
    }

    public function delete($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return redirect('/admin/users');
        }else{

            abort(404);
        }
    }

    public function deleteReview($id){
        $review = review::find($id);

        if($review){
           $review->delete();
           return redirect("/admin/reviews");
        }
        else{
            abort(404);
        }
    }

    public function addUser(Request $req){
        $this->validate($req,
            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|unique:users',
                'phone'=>'required',
                'password'=>'required',
                'role' => 'required'
            ]
        );
        $user = new User;
        $user->first_name  = $req->fname;
        $user->last_name   = $req->lname;
        $user->email       = $req->email;
        $user->phone       = $req->phone;
        $user->password    = $req->password;
        $user->role        = $req->role;
        if($user->save()){

            return redirect('/admin/users');
        }
        abort(404);

    }
}
