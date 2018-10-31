<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\space;
use App\User;
use App\review;
use App\Mail\spaceMail;
use Mail;
use Illuminate\Support\Facades\Auth;
class adminSpacesController extends Controller
{
    //

    public function getSpaces(){
        $spaces = space::paginate(5);
        return view('admin.spaces' , ['spaces'=>$spaces]);
    }

    public function addSpace(Request $req){

        $this->validate($req,
            [
                'name'=>'required',
                'user_name'=>'required|unique:spaces',
            ]
        );
        $space = new space;
        $space->name = $req->name;
        $space->user_name = $req->user_name;
        $space->email = $req->email;
        $space->description = "replace this text with your desription.";
        $space->password = rand(100000,999999);
        $space->profile_img = "images/spaces/avatar/avatar.jpg";
        $space->save();
        session(['name'=>$space->name , 'user'=>$space->user_name ,'password'=>$space->password]);
        Mail::to($space->email)->send(new spaceMail);
        return redirect('/admin/spaces');
    }

    

    public function delete($id){
        $space = space::find($id);
        if($space){
            $space->delete();
            return redirect('/admin/spaces');
        }else{

            abort(404);
        }
    }

    public function getReviews(){
        $reviews = review::join('users' ,'reviews.user_id' , '=','users.id')
        ->join('spaces' , 'spaces.id' , '=' , 'reviews.space_id')->paginate(5);
        return view('admin.reviews' , ['reviews'=>$reviews]);
    }

}
