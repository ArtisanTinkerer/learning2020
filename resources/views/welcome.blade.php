<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">



</head>
<body class="bg-gray-300">
    <div class="bg-gray-100 flex">
        <div class="p-10 max-w-md mx-auto sm:max-w-xl lg:w-1/2 lg:max-w-full lg:py-24 lg:px-12"> {{--left--}}

            <img class="h-24 rounded-lg shadow-xl" src="{{asset('images/cover.png')}}" alt="Book Shorts">

            <img class="lg:hidden mt-6 sm:mt-8 sm:h-64 sm:w-full sm:object-cover rounded-lg shadow-xl object-center" src="{{asset('images/pic.jpg')}}" alt="Person Reading">
            <h1 class="mt-6 sm:mt-8 text-lg sm:text-4xl font-bold text-grey-900">Why read or write lengthy reviews when you could be enjoying a new book?</h1>
            <p class="mt-2 sm-mt-4 sm-text-2xl text-orange-500">
                Book Shorts helps you quickly find your next book.
            </p>
            <div class="mt-4 sm:mt-6 sm:text-base">
                <a href="#" class="focus:outline-none focus:shadow-outline shadow-lg px-5 py-3 rounded-lg inline-block hover:bg-black active:bg-orange-200 bg-orange-500 text-white text-sm uppercase tracking-wider font-semibold">Get started</a>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 lg:relative"> {{--right--}}
            <img class="absolute inset-0 h-full w-full object-cover object-center" src="{{asset('images/pic.jpg')}}" alt="Person Reading">
        </div>
    </div>
</body>
</html>
