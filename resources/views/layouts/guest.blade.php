<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Farmacia') }}</title>


        <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}} ">
        <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}} ">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}} ">

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}} ">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}} " />


    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}} "></script>
        <script src="{{asset(' assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('assets/js/hoverable-collapse.js')}} "></script>
        <script src="{{asset('assets/js/misc.js')}} "></script>
    </body>

</html>
