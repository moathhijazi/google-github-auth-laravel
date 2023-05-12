<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class auth extends Controller
{
    public function signin(Request $request) {

    }

    public function github_auth() {

        try{
            return Socialite::driver('github')->redirect();
        }catch(e){
            return redirect()->back();
        }
    }

    public function to_db_github() {
        function random_() {
            $str = 'abcdefghijklmnopqrstuvwxyz1234567890*/-%^@#%' ;
            $random = str_shuffle($str) ;

            return $random ;
        }
        $githubUser = Socialite::driver('github')->user();
        $user = DB::table('users')->updateOrInsert(['provider_id' => $githubUser->id,],[


            'provider' => 'github',
            'provider_token' => $githubUser->token,
            'username' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => random_() ,
            'provider_avatar' => $githubUser->avatar

        ]);

        session_start() ;

        $_SESSION['user'] = [
            'id' => $githubUser->id,
            'username' => $githubUser->name ,
            'email' => $githubUser->email ,
            'avatar' => $githubUser->avatar
        ];

        return redirect()->route('home');
    }

    public function google_auth() {
        try{
            return Socialite::driver('google')->redirect();
        }catch(e){
            return redirect()->back();
        }
    }

    public function to_db_google() {
        function random_() {
            $str = 'abcdefghijklmnopqrstuvwxyz1234567890*/-%^@#%' ;
            $random = str_shuffle($str) ;

            return $random ;
        }
        $githubUser = Socialite::driver('google')->user();
        $user = DB::table('users')->updateOrInsert(['provider_id' => $githubUser->id,],[


            'provider' => 'google',
            'provider_token' => $githubUser->token,
            'username' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => random_() ,
            'provider_avatar' => $githubUser->avatar

        ]);

        session_start() ;

        $_SESSION['user'] = [
            'id' => $githubUser->id,
            'username' => $githubUser->name ,
            'email' => $githubUser->email ,
            'avatar' => $githubUser->avatar
        ];

        return redirect()->route('home');
    }


}
