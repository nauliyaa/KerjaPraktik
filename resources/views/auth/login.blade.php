<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Logistik') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @section('content')
        <div class="container-sm my-5" style="">
            <div class="row justify-content-center">
                {{-- Warna --}}
                <div class="p-5  rounded-3 col-lg-4 " style="width: 30rem;background-color: #FFFFFF">
                    <div class="mb-3 text-center">
                        {{-- LOGO --}}
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/telpro.png') }}"alt="image" width="80%">
                        <h4 class="text-dark text-center"> <strong>TELKOM PROPERTY</strong> </h4>
                        <h5 class="text-dark text-center">REGIONAL V JATIM BALI NUSRA</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <input id="email" type="email" class="rounded-pill bg-white form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <input id="password" type="password" for='password'
                                        class="rounded-pill bg-white form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter Your Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2 d-grid gap-3">
                                    <button type="submit" class="rounded-pill btn btn-primary"style="background-color: #92C874"><i
                                            class="bi bi-box-arrow-in-right"></i>
                                        {{ __('Login') }}</button>
                                </div>
                            </div>
                            <div class="mb-3 text-center">
                                <div class="mt-1 pt-4">
                                    <p class="text-dark text-center"> don't have an acount?<a href="{{ route('register') }}"
                                            class=" link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                            style=";color:#FF3333"> Register! </a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </body>
</html>