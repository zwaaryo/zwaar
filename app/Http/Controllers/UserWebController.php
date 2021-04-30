<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
class UserWebController extends Controller
{
    // Users Web 
    public function user_web()
    {
      return view('user_web', ['links'=>Link::all() ]);
    }
}
