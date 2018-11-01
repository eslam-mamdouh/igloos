<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table="reservations";
    protected $fillable=[ 
        'id','user_id','space_id','name','people_num','date','time'
    ];
}
