@extends('layouts.app')
<style>
.vl {
  border-left: 1px solid rgb(0, 0, 0);
  height: 400px;
  margin-left: 60px; 
}
.bi-eye-slash{
    position: absolute;
    top: 48%;
    left: 38%;
    cursor: pointer;
}
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-9">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body shadow">
                    <form method="POST" action="{{ route('login') }}">
                        
                        <div class="row my-3 mx-3">
                            <div class="col-md-5">
                                @csrf

                        <div class="h1 fw-bold">Log in</div>     
                        
                        <div class="row mb-3">
                            <label for="username" class="col-form-label">{{ __('Username') }}</label>
                            <div class="col-md-12">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                               
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 mt-3 text-center">
                                <button type="submit" class="btn btn-outline-primary form-control shadow">
                                    {{ __('Login') }}
                                </button>
                                    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link mt-2 text-decoration-none" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                            </div>

                             <div class="vl col-md-1"></div>
                            
                            <div class="col-md-5">
                                 <br><br><br>
                                 <a class="btn btn-outline-primary btn-lg form-control shadow my-3" href="{{ url('auth/facebook') }}"> <i class="bi bi-facebook"></i> Log in Facebook</a>
                                 <a class="btn btn-outline-warning btn-lg form-control shadow my-3" href="{{ route('auth.google') }}"> <i class="bi bi-google"></i> Log in Google </a>
                                 <a class="btn btn-outline-dark    btn-lg form-control shadow my-3"    href=""> <i class="bi bi-apple"></i> Log in Apple </a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection