<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
class API extends Controller
{
    public function signin(Request $request) {

        $email = $request -> email ;
        $password = $request -> password ;
        //hashing password by md5
        $hash_password = md5($password)  ;
        $user = DB::table('users')->where('email' , $email)->where('password' , $hash_password)->first() ;
        if($user) {
            session_start() ;
            $_SESSION['user'] = [
                'id' => $user->id,
                'username' => $user->username ,
                'email' => $user->email ,
                'avatar' => $user->provider_avatar
            ];

            $success = '<script>  location.href = "/" ;</script>' ;


            return $success  ;

        }else{
            $message = '<span class = "text-red-500 font-medium" >Incorrect email or password!<script> loading(false , "signin"); </script></span>' ;


            return $message  ;
        }




    }

    public function signup(Request $request) {
        $username = $request->username ;
        $email = $request->email ;
        $password = $request->password ;
        $password_hash = md5($password) ;
        $avatar = 'index.jpg' ;
        $user = DB::table('users')->where('email' , $email)->first() ;
        if($user) {
            $message = '<span class = "text-red-500 font-medium" >Email is already in use!<script> loading(false , "signup"); </script></span>' ;
            return $message  ;
        }else{
            $user = DB::table('users')->insert([
                'provider' => 'mailer' ,
                'provider_id' => 'mailer-00132' ,
                'provider_token' => 'no_token' ,
                'username' => $username ,
                'email' => $email ,
                'password' => $password_hash ,
                'provider_avatar' => $avatar
            ]);

            $new_user = DB::table('users')->where('email' , $email)->where('password' , $password_hash)->first() ;
            if($new_user) {
                session_start() ;
                $_SESSION['user'] = [
                    'id' => $new_user->id,
                    'username' => $new_user->username ,
                    'email' => $new_user->email ,
                    'avatar' => $new_user->provider_avatar
                ];

                return '<script>location.href = "/" </script>' ;
            }else{
                return '<span class = "text-red-500 font-medium">Something went wrong please try again !</span>' ;
            }




        }
    }
}
