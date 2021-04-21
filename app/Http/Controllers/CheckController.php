<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Check;
use App\Postlinkuser;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
// Class Check Users 
class CheckController extends Controller
{
      //   لازم يكون مسجل في الموقع
      public function __construct(){
        $this->middleware('auth');
     }
     // التحقق من المستخدم اذا كان جاي عن طريق الرابط المختصر يتم تاكيد الزياره واذا كان داخل ياكد الزياره من غير مشاهده الرابط يتم تحويله الى صفحه الرئيسيه
    public function user_check()
    { 
        $checks = Postlinkuser::all();
         foreach($checks as $check)
         {
             if($check->user_id != Auth::user()->id)
             {
             return redirect();

             }else{
                return view('check');      
     
             }
         }  
    }
// تاكيد الزياره
    public function add_id_user_check()
    {
        $number_check = new Check();
        $number_check->user_id = \Auth::user()->id;
        $number_check->save();
        return redirect('home');
    } 

  

}
