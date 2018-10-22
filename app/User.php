<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\verifyEmail;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id','first_name','last_name', 'username','email','phone','password','conpassword','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


         /**
         *Returns true if the user Is verified
         *
         *@return bool
         */
    public function verified(){
        return $this->token === null;
    }
/**
*@return void
*/
        public function sendVerificationEmail(){
        $this->notify(new verifyEmail($this));
    }

}
