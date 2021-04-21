<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'post_link',
        'user_id_link'
        
   ];
       // الرابط له يوز واحد فقط 
       public function user_post()
       {
       return $this->belongsTo(User::class);    
   }   
}
