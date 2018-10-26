<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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

        if($id){
           $review->delete();
           return redirect("/admin/users");
        }
        else{
            abort(404);
        }
    }
}
