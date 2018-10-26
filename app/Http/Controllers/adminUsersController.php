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

        if($id){
           $review->delete();
<<<<<<< HEAD
           return redirect("/admin/reviews");
=======
           return redirect("/admin/users");
>>>>>>> 35a9be1a99cc5716d5d0addf82ab6d99f17f13c6
        }
        else{
            abort(404);
        }
    }
}
