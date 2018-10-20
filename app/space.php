<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class space extends Model
{ 
protected $table='spaces';

protected $fillable=[
    'id','user_name','password','name','description','profile_img'
];
protected  $hidden = array('password');
}
