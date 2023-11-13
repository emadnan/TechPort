<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function admin(){
        return view('admin');
    }

    public function admintable(){
        return view('admintable');
    }
    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }
    public function save(Request $request){
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if($save)
        {
            return back()->with('success','User Registered');
        }
        else
        {
            return back()->with('error','Something Went Wrong');

        }
    }
    public function check(Request $request){
        $request->validate([
           
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $user = User::where('email',$request->email)->first();
   if($user && Hash::check( $request->password,$user->password))
        {
            $request->session()->put('loggedUser' , $user->id);
            return redirect()->route('dashboard');
        }
        else
        {
            return back()->with('fail','Incorrect Credentials');

        }
    }
    public function dashboard(){
        $loggedInfoUser = User::where('id' ,'=',session('loggedUser') ,)->first();
        if(!$loggedInfoUser)
        {
           return redirect()->route('user/login')->with('fail', 'Must Log In Access');   
        }
        $users = User::all();
        return view('dashboard'
        ,[
            'LoggedUserInfo'=>$loggedInfoUser,
            'users'=>$users
        ]
    );

}
}