<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("admin.Auth.login");
    }
    public function register(){
        return view("admin.Auth.register");
    }
    public function handelLogin(Request $request){
    $data = $request->validate([
    "email" => "required|email",
    "password" => "required|min:6"
]); 

$is_login = Auth::attempt([
    "email" => $request->email,
    "password" => $request->password
]);

if(!$is_login){
    return redirect()->route('login')->with("msg", "invalid email or password");
}

if(Auth::user()->role == "admin"){
    return redirect()->route('admin.student.index');
}else{
    return redirect()->route('home');
}

    }
    public function handelRegister(Request $request){
        $data=$request->validate([
        "name"=>"required",
        "email"=>"required|email",
        "password"=>"required|min:6"
    ]);
        $data['password']=Hash::make($request->password);
    $user=User::create($data); 
    Auth::login($user);
    return redirect()->route("admin.student.index");
    }
    public function logout(){
    
    Auth::logout();
    return redirect()->route("login");
    }
}