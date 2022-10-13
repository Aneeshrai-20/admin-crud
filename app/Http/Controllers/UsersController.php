<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\role_user;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     public function register()
    {
    return view('register'); 
    }


    public function store(Request $request)
    {
        
$firstname = $request->firstname;
$lastname = $request-> lastname;
$email =$request->email;
$mobile =$request->mobile;
$password =Hash::make($request->password);
$cpassword =Hash::make($request->cpassword);
$data=[];
$data=['firstname'=>$firstname , 'lastname'=>$lastname,  'email'=>$email ,'mobile'=>$mobile , 'password'=>$password ];
$a = User::create($data);


$new = $a['id'];
$user_id=$new;
$role_id = 2;
$red=[];
$red =['user_id'=>$user_id , 'role_id'=>$role_id];
$a =  role_user::create($red);
return redirect('/login')->with('error' , 'Success');
}
        
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
