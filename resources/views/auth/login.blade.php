

@extends('layouts.app')
@section('contant')
<section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/3.jpg')}}" alt="looginpage"></div>
          <div class="col-xl-7 p-0">    
            <div class="login-card">
              <form  class="theme-form login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                <h4>Login</h4>
                <h6>Welcome back! Log in to your account.</h6>
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-muted" for="checkbox1">Remember password</label>
                  </div>
                  @if (Route::has('password.request'))
                                    <a class="link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                 
                </div>
                <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign In">
</div>
                <!-- <div class="login-social-title">                
                  <h5>Sign in with</h5>
                </div>
                <div class="form-group">
                  <ul class="login-social">
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
                  </ul>
                </div> -->
                <p>Don't have account?<a class="ms-2" href="{{url('/register')}}">Create Account</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection