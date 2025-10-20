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
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                        <img src="../../assets/images/logo-dark.svg">
                        </div>
                        <h4>Olá! faça o seu login</h4>

                        <form method="POST" class="pt-3" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>


                            <div class="form-group">
                                <x-input-label for="password" :value="__('Palavra Passe')" />

                                <x-text-input id="password" class="form-control form-control-lg"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                        <div class="mt-3">
                            <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                {{ __('Entrar') }}
                            </x-primary-button>
                        </div>

                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                            <label class="form-check-label text-muted">

                            </div>
                             @if (Route::has('password.request'))
                                <a class="auth-link text-black" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha ?') }}
                                </a>
                            @endif

                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
        </div>

        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}} "></script>
        <script src="{{asset(' assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('assets/js/hoverable-collapse.js')}} "></script>
        <script src="{{asset('assets/js/misc.js')}} "></script>
    </body>

</html>


