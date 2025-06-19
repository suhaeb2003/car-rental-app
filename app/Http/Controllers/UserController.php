<?php

namespace App\Http\Controllers;

use App\Helper\JWT_Token;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userSignup(Request $request){
       $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required'
       ]);
       
       $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'role' => 'user'
       ]);
       if($user){
           return response()->json([
               'message' => 'User created successfully',
               'user' => $user
           ]);
       }else{
           return response()->json([
               'message' => 'User not created'
           ]);
       }
    }

    public function userLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        $token = JWT_Token::CreateToken($user->email, $user->id);
        if($user){
            if(password_verify($request->password, $user->password)){
                setcookie('token', $token, time() + 60*60*24*365, '/');
                return response()->json([
                    'message' => 'User logged in successfully',
                    'token' => $token,
                    'user' => $user
                ]);
            }else{
                return response()->json([
                    'message' => 'Invalid password'
                ]);
            }
        }
    }

    public function logout(){
        setcookie('token', '', time() - 3600, '/');
        return response()->json([
            'message' => 'User logged out successfully'
        ]);
    }
}
