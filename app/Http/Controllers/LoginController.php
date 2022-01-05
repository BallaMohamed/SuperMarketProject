<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        if(session()->has('user')){
            return redirect('/home');
        }else{
            return view('Users.login');
        }
        
    }

    public function check(Request $request)
    {
        $name     = $request->input('name');
        $password = $request->input('password');
        $users = User::all();
         foreach($users as $user){
               if($user->name == $name && $user->password == $password){
                $request->session()->put('user', $name);
                 return redirect('/home');
               }
               else{
                   return redirect()->back();
               }
         }
    }
}
