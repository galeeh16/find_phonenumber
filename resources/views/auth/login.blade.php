@extends('auth.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body mx-5 px-5">
                    <div class="text-center mb-4">
                        <img src="icons/lock.svg" alt="Login" width="150">
                        {{-- <h4>{{ __('Login to your account') }}</h4> --}}
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username" class="col-form-label text-md-right font-weight-normal">{{ __('Username') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right font-weight-normal">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in-alt"></i> {{ __('Login')}}</button>
                        </div>

                        <div class="form-group text-center">
                            <a class="text-success text-underline" href="/register">Register for Find Phonenumber</a>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
