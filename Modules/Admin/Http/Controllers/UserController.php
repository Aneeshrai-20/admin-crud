<?php
namespace App\Models;
namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\role_user;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{

public function index()
{

return view('admin::users.index');
}
public function users(Request $request)
 {
  $search = $request->search ?? '';
  if($search != ''){
    $data = User::whereHas('role',function($q){
      $q->where('role_id','2');
    })->where('name','like','%'.$search.'%')->paginate(10);
  }else{
    $data = User::whereHas('role',function($q){
      $q->where('role_id','2');
    })->paginate(10);
  }
   return view('admin::users.index' ,compact( 'data'));
}
public function logout(Request $request) {
auth()->logout();
return redirect()->route('/login');
}

public function create()
{
$a  = "add";
return view('admin::users.view' ,compact('a'));
}

public function store(Request $request)
{  
$validatedData = $request->validate([
'firstname' => 'required',
'lastname' => 'required',

'email' => 'required|unique:users|max:255',
'mobile' => 'required|unique:users|max:10',
'password' => 'required',
], [

'password.required' => 'Password is required'
]);
$firstname = $request->firstname;
$lastname = $request-> lastname;
$email =$request->email;
$mobile =$request->mobile;
$status = $request->status;
$password =Hash::make($request->password);
$data=[];
$data=['firstname'=>$firstname , 'lastname'=>$lastname,  'email'=>$email , 'mobile'=>$mobile ,'status'=>$status, 'password'=>$password ];
$a = User::create($data);

$new = $a['id'];
$user_id=$new;
$role_id = 2;
$red=[];
$red =['user_id'=>$user_id , 'role_id'=>$role_id];
$a =  role_user::create($red);
return redirect('admin/users')->with('error' , 'Success');
}
public function view($slug)
{
$a  = "view";
$user= User::where('slug' ,$slug)->first();
return view('admin::users.view', compact('user','slug' ,'a'));

}

public function edit($slug)
{

$a  = "update";
$user= User::where('slug' ,$slug)->first();
return view('admin::users.view', compact('user','slug' ,'a'));

}


public function update(Request $request)
{


$firstname = $request->firstname;
$lastname = $request->lastname;
$email =$request->email;
$mobile =$request->mobile;
$status = $request->status;
$data=[];
$data=['firstname'=>$firstname , 'lastname'=>$lastname, 'email'=>$email , 'mobile'=>$mobile, 'status'=>$status];
$a= User::where('slug',$request->slug)->update([ 'firstname' => $request['firstname'],'lastname' => $request['lastname'], 'email' => $request['email'], 'mobile' => $request['mobile'], 'status' => $request['status']]); 
return redirect('admin/users')->with('message' , 'thanks for update');

}


public function destroy($slug)
{
$user= User::where('slug' ,$slug)->first();
$user->delete();
return redirect('admin/users')->with('warning','details has been deleted ');
}


}

