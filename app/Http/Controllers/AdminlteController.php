<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Link;
use App\User;
use App\Posts;
use App\Call;
use App\Postlinkuser;
use App\Add_name_web;
use App\Role;
use App\role_user;
use App\Check;
 use \Mindscms\Entrust\Middleware\EntrustRole;
 use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
 // Class Admin
class AdminlteController extends Controller
{
    // الي يدخل الى لوحه التحكم لازم يكون عنده صلاحيه الادمن
    public function __construct(){
        $this->middleware(['role:admin']);
    }
  

    public function linknotEnabled()
    {
         return view('adminlte.allLinks_notEnabled');
    }
    // Route admin
    public function index()
    {

        $posts = Posts::all();
         return view('adminlte.admin',['posts' => $posts]);

    }
  

    public function allLink_enabled()
    {
        $links_admin = Link::orderBy('created_at','desc')->get();
        return view('adminlte.allLinks_Enabled',['links_admin' => $links_admin]);
    }

    public function allLink_notenabled()
    {
        return view('adminlte.allLinks_notEnabled',['links_admin' => Link::all()]);

    }
    public function add_posts()
    {
        return view('adminlte.add_posts');

    }
    // Add Post Link
    public function add()
    {
        $validate = request()->validate([
            'post_link' => 'required',
             
        ]);

        $add_post = new Posts();
        $add_post->post_link  = request('post_link');
         $add_post->user_id= Auth::user()->id;
        $add_post->save();
        return redirect('/admin');
        
    }
 
   
    public function all_users()
    {
        $users = User::orderBy('created_at','desc')->get();
        return view('adminlte.all_users', ['users'=> $users] );
    }

        // Delete Posts Links
        public function destroy($id)
        {
            $delte= Posts::find($id);
    
            $delte->delete();
            
           return redirect('/admin');
        }
        // Call Users
        public function call()
        {
            $calls = Call::orderBy('created_at','desc')->get();
             return view('adminlte.call', ['calls'=> $calls] );
        }
        //Delete Call User
        public function delete_call($id)
        {
            $delte_call = Call::find($id);
            $delte_call->delete();
            return redirect('/call');
        }

        public function clarCache()
        {
            Artisan::call('cache:clear');
            return redirect('admin');

        }
        public function delete_all_post_user()
        {
            $postlinkuser = Postlinkuser::all();
            return view('adminlte.delete_all_post_user' , ['postlinkuser' => $postlinkuser]);
        }
        // Delete All Posts Users
        public function deletAll(Request $request)
        { 
            $id = $request->id;
     
            foreach ($id as $posts) 
            {
                
           
                Postlinkuser::where('id', $posts)->delete();
          
         }
            return redirect('delete_all_post_user');
        }
        // View Delete User ID
        public function delete_all_userid()
        {
          $check_view = Check::all();
          return view('adminlte.delete_all_userid' , ['check_view' => $check_view]);
        }
        // Function Delete User ID
         public function deletAll_userid(Request $request)
         {
            $id = $request->id;
            foreach ($id as $delete_userid) 
            {
                
           
                Check::where('id', $delete_userid)->delete();
          
         }
            return redirect('delete_all_user_id');
         }
        public function add_name_web()
        {
            return view('adminlte.add_name_web');
        }

            // Add Name Web
        public function add_name()
        {
            $validate = request()->validate([
                'add_name_web' => 'required',
            ]);
            $add_name = new Add_name_web();
            $add_name->name_web  = request('add_name_web');
            $add_name->save();
            return redirect('/admin');
            
        }
        public function addroles()
        {
           return view('adminlte.addroles');
        }
        public function allroles()
        {
            $allrole = Role::all();
           return view('adminlte.allrolesname',compact('allrole'));
        }
        // View Roles Users
        public function all_roles_username()
        {
            // عرض اسم المستخدم مع الصلاحيه الخاصه به
            $users = User::withRole('admin')->get();
           $role_user = role_user::all();
           return view('adminlte.allrolesusername',['role_user'  => $role_user , 'users' => $users]);
        }
        // Add Roles
        public function add_roles()
        {
            $validate = request()->validate([
                'name_roles' => 'required',
                'display_name' => 'required',
                'description' => 'required',
                'allowed_route' => 'required',
            ]);
            $add_name = new Role();
            $add_name->name  = request('name_roles');
            $add_name->display_name  = request('display_name');
            $add_name->description  = request('description');
            $add_name->allowed_route  = request('allowed_route');
            $add_name->save();
            Session::flash('message', '!تمت اظافهّ الرولز بنجاح'); 
            return redirect('/addroles');
        }
        public function delete_roles($id)
        {
           $datas = Role::findOrFail($id);
            
              if (!is_null($datas)) {
                $datas->delete();
                return view('adminlte.allrolesname');
            }
        
            Session::flash('message', '!No'); 
        }
        // View Edit
        public function edit_role($id)
        {
            $edit_roles = Role::find($id);
             return view('adminlte.edit',['edit_roles' => $edit_roles]);
        }
       // Update Data Edit Role
        public function update_role(Request $req){

        $update_role =  Role::find($req->id);
        $update_role->name  = request('name');
        $update_role->display_name  = request('display_name');
        $update_role->description  = request('description');
        $update_role->allowed_route  = request('allowed_route');
        $update_role->save();
        Session::flash('message', '!تمت تعديل الرولز بنجاح'); 
        return redirect('/allroles');

   }
      // View  Roles User Name
      public function add_role_user()
      {
          $add_role_user =  Role::all();
          return view('adminlte.add_role_username' , ['add_role_user' => $add_role_user , 'user' => User::all()]);
      }
      // Delete Roles User Name
      public function delete_roleusername($id)
      {

        // DB::delete('DELETE FROM role_user WHERE id=?',[$id]);
     $delete =  role_user::find($id);
       $delete->delete();
         
        return redirect('/allroles_username');
      }

      public function add_roleuser()
      {
          $add = new role_user();
          $add->user_id = request('user_id');
          $add->role_id = request('role_id');
          $add->save();
          return redirect('/allroles_username');  
      }

      
}
