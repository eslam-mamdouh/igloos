<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{   
 
    protected $table="reviews";
    
    protected $fillable=[ 
        'id','user_id','comment','space_id'
    ];

 
}
