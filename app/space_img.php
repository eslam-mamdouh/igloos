<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class space_img extends Model
{  
protected $table='SpaceImgs';

protected $fillable=[
    'id','space_id','img_url'
];

}
