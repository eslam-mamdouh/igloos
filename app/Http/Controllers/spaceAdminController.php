<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\space_img;
use App\space;
use App\User;
use App\review;
use Illuminate\Support\Facades\Auth;
use File;
class spaceAdminController extends Controller
{
    //

    public function getReviews(){
        $space_id = session('user')->id;
        $reviews = review::join('users' ,'reviews.user_id' , '=','users.id')
        ->join('spaces' , 'spaces.id' , '=' , 'reviews.space_id')->where('space_id',$space_id)->paginate(5);
        return view('spaceAdmin.reviews' , ['reviews'=>$reviews]);
    }

    public function getReservations(){
        
    }

    public function dash(){

        return view('spaceAdmin.dash');
    }
    public function deleteImage($id){
        $image = space_img::find($id);
        if(File::exists($image->img_url)){
            File::delete($image->img_url);
            $image->delete();
            return redirect('/space-admin/images');
        }
    }
    public function getImages(){
        $images = space_img::where("space_id" , 1)->get();
        return view('spaceAdmin.images' , ['images'=>$images]);
    }
    public function upload(Request $req){
        $image = $req->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $path = 'images\spaces/';
        $image->move($path, $input['imagename']);
        $fullPath = $path.$input['imagename'];
        // $space = space::find(1);
        $space = new space_img;
        $space->space_id = 1;
        $space->img_url = $fullPath;
        $space->save();
        return redirect('/space-admin/images');

        

    }
    // public function uploadProfile(){
    //     return
    // }

    public function login(Request $req){
        $this->validate($req,
            [
                'user_name'=>'required|exists:spaces',
                'password'=>'required|min:6'
            ]
        );

        $space = space::where('user_name' , $req->user_name)->orwhere('email' , $req->user_name)->where('password',$req->password)->first();

        if(!$space){
            abort(404);
        }
        $user = new User;
        $user->id         = $space->id;
        $user->email      = $space->email;
        $user->first_name = $space->name;
        session(['user'=>$user]);
        return redirect('/space-admin');

    }
}
