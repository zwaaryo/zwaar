<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postlinkuser extends Model
{
    protected $fillable = [
        'post_user',
        'user_id',
        'number'
         
   ];
}
