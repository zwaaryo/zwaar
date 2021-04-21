<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Link;
use App\Posts;
use Illuminate\Support\Facades\Auth;
use App\Postlinkuser;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // عرض الروابط
    public function index()
    {
        // عرض عدد الروابط الخاصه ب المستخدم
        $links = User::find(Auth::user()->id)->links()->orderBy('id', 'DESC')->get();
        // عرض الرابط لمشاهدته
        $posts = Posts::all();
             return view('home', compact('links'   , 'posts'));
    }
    
}
