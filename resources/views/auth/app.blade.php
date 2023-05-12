<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title') - Mailer</title>
</head>
<body >


    <div class="w-full flex justify-center items-center flex-col">
        <div class="flex flex-col border border-gray-200 rounded shadow-md w-full md:w-1/2 lg:w-1/3 ">
            <div class="w-full flex  justify-center items-center p-4">
                <img src="images/icons/logo.png" class="w-10" alt="mailer-logo">
                <h2 class="font-medium text-2xl text-gray-700 ml-2" >Mailer . . .</h2>
            </div>
            <div class="text-center" id="alerter"></div>
            <main class="p-4">
                @yield('content')
            </main>
            <div class="w-full flex items-center justify-between px-5 mt-3">
                <span class="text-sm font-medium text-gray-600">OR</span>
                <span class="text-sm font-medium text-blue-600 underline"><a href="@yield('link-href')">@yield('link-title')</a></span>

            </div>
            <hr class="my-2">
            <div class="flex flex-col p-5 ">

                <a href="{{ route('github_auth') }}" id="github-auth" onclick="setTimeout( () => { loading(true); } , 300);" class="hover:bg-gray-500 p-3 rounded shadow-md mt-4 text-white bg-gray-600 transition flex justify-center items-center ">
                    <i class="fa-brands fa-github mr-5"></i> Continue with github
                </a>
                <a href="{{ route('google_auth') }}" id="google-auth" onclick="setTimeout( () => { loading(true); } , 300 );" class="hover:bg-orange-500 p-3 rounded shadow-md mt-4 text-white bg-orange-600 transition flex justify-center items-center ">
                    <i class="fa-brands fa-google mr-5"></i> Continue with google
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/main.js"></script>
</body>
</html>
