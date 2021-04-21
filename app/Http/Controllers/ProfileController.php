<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Link;
use App\Call;
use App\Posts;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Postlinkuser;
use App\Number;
use App\Check;
use Illuminate\Support\Facades\Session;
  
class ProfileController extends Controller
{
     //   لازم يكون مسجل في الموقع
     public function __construct(){
        $this->middleware('auth');
     }

    // Index Profile
    public function index()
    { 
        // كلاس رابط المستخدم بعد المشاهده
        $postuserlink = Postlinkuser::all();
        $links = User::find(Auth::user()->id)->links()->orderBy('id', 'DESC')->get();
        // $links = cache()->remember( 'users' ,60*60*24, function(){
        //  return User::find(Auth::user()->id)->links()->orderBy('id', 'DESC')->get();
        // }); 
        return view('profile' ,['links'=>$links   , 'postuserlink' => $postuserlink ,'checks' => Check::all()] );
        //    $data = Cache::set('links' , Link::all(), 60*60*24);
        //    $k1 = Cache::get('links');
        //     return $k1;
    }
    // View Link User Profile
    public function addlink(Request $request)
    {
        $links = User::find(Auth::user()->id)->links()->get();
        return view('addlink', ['links'=>$links]);
    }
    // Add Link
    public function add()
    {
        $links = User::find(Auth::user()->id)->links()->get();
        $validate = request()->validate([
            'link' => 'required|url'
        ]);
        $link = new  Link();
        $link->link = request('link');
        $link->user_id = Auth::user()->id;
         $link->website_number=0;
        $link->save();
        Session::flash('message', ' تم اظافهّ الرابط بنجاح' ); 
        return redirect('/add');
    }  
    // Delete Link User Web
    public function destroy($id)
    {
        $delte_link = Link::find($id);
        $delte_link->delete();
        Session::flash('message', 'تم حذف الرابط'); 
       return redirect('/profile');
    }
     // تفعيل الرابط
    public function checkbox_website_number($id)
    {
        $link = Link::find($id);
        $link->website_number=1;
        $link->updated_at;
        $link->save();
        return redirect('/profile');
    }
      // Users Web 
       public function user_web()
       {
         return view('user_web', ['links'=>Link::all() ]);
       }
       // Add Call Users
       public function call()
       {
           $call = new Call();
           $call->name = request('name');
           $call->email = request('email');
           $call->phone = request('phone');
           $call->message = request('message');
           $call->save();
           Session::flash('message', '  تمت ارسال الرساله بنجاح'); 
           return redirect('/');
       }
    
}// End Class
