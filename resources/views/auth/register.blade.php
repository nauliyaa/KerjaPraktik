@extends('layouts.app')

@section('content')

    <body class="bg-light">
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5 rounded-3 col-lg-4 border" style="width: 25rem ; background-color : #E0E0E0">
                    <div class="mb-3 text-center">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/telpro.png') }}"alt="image"
                            style="width: ;">
                        <h4> <strong>TELKOM PROPERTY</strong> </h4>
                        <h5>REGIONAL V JATIM BALI NUSRA</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-floating form-label">
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    id="name" placeholder="name" name="name" value="{{ old('name') }}">
                                <label class="form-label " for="name">{{ __('Name') }}</label>
                                @error('name')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="form-floating form-label">
                                <input type="email"
                                    class="form-control
                            @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" name="email"
                                    value="{{ old('email') }}">
                                <label for="email">{{ __('Email Address') }}</label>
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="form-floating form-label">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password" name="password" value="{{ old('password') }}">
                                <label for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-floating form-label">
                                <input type="password" class="form-control" id="password-confirm" placeholder="confirm password"
                                    name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
@endsection