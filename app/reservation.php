<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected Table reservations;
    
        protected $fillable = [
        'id','date','time','user_id','people_num','room_num','space_id'
    ];
}
