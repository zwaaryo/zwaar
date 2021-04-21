<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  
    protected $fillable = [
        'link',
        'numberـlink',
        'user_id',
        'website_number'
       ];
        // الرابط له يوز واحد فقط 
       public function user()
       {
       return $this->belongsTo(User::class);    
   }   
}
