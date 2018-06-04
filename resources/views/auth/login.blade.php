@extends('master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="font-italic font-weight-light">sign in to proceed</h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" placeholder="username">

                        @if ($errors->has('username'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group form-check">
                        <input id="remember" type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('remember me') }}</label>
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-lg">{{ __('Sign in') }}</button>
                        <a class="btn btn-secondary btn-lg" href="{{ route('password.request') }}">{{ __('Reset Password') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
