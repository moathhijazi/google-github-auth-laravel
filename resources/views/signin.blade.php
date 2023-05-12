@extends('auth.app')
@section('content')
    <div class="w-full">
        <label for="email" class="font-medium text-md">
            Email
        </label>
        <input type="email" name="email" placeholder="Email address" id="email" class="w-full rounded border-2 border-gray-500 focus:outline-blue-600 h-12 pl-2">
    </div>
    <div class="w-full mt-3">
        <label for="password" class="font-medium text-md">
            Password
        </label>
        <input type="Password" name="Password" placeholder="Password" id="password" class="w-full rounded border-2 border-gray-500 focus:outline-blue-600 h-12 pl-2">
    </div>
    <div class="w-full mt-3">
         <button class="flex justify-center items-center w-full rounded bg-blue-500 shadow-md text-white hover:bg-blue-600 transition text-medium h-12 pl-2"

         onclick="validate('signin') ;"
         id="auth-btn"
         >Signin</button>
    </div>
@endsection


@section('title' , 'Signin')
@section('link-href' , '/signup')
@section('link-title' , 'Cearte new account ?')

