<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\space;
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
                'description'=>'required',
                'password'=>'required'
            ]
        );
        $space = new space;
        $space->name = $req->name;
        $space->user_name = $req->user_name;
        $space->description = $req->description;
        $space->password = $req->password;
        $space->save();
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
}
