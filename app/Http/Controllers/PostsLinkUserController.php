<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postlinkuser;
use Illuminate\Support\Facades\Auth;
 // حفظ زياره الرابط
class PostsLinkUserController extends Controller
{
    
  //حفظ زياره الرابط 
 public function add_post_user()
 {   
  
     $add = new Postlinkuser();
     $add->post_user  = request('post_user');
     $add->user_id = Auth::user()->id;
     $add->save();
     return redirect($add->post_user);

 }
 
 
   
}
