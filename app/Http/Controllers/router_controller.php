<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class router_controller extends Controller
{
    public function login_route() {
        session_start() ;
        $auth = @$_SESSION['user']['id'] ;

        if(isset($auth)) {
            return redirect() -> route('home')->with('user' , $auth) ;

        }

        return view('signin') ;

    }

    public function home() {
        session_start() ;
        $auth = @$_SESSION['user']['id'] ;

        if(!isset($auth)) {
            return redirect() -> route('signin')->with('user' , $auth) ;

        }

        return view('home') ;
    }

    public function register_route() {
        session_start() ;
        $auth = @$_SESSION['user']['id'] ;

        if(isset($auth)) {
            return redirect() -> route('home')->with('user' , $auth) ;

        }

        return view('signup') ;
    }
}
