@extends('layouts.blankMaster')

@section('content')

<section class="account-section bg_img" style="background-image: url('{{ asset( 'img/bg/login.jpg') }}');">
  <div class="account-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="account-wrapper">
            <form class="account-form" method="POST" action="{{ route('login')}}">
              @csrf
              <div class="account-thumb-area text-center">
              <a href="#" class="col d-flex justify-content-center mb-1">
                <img style="height:50px;" src="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}"
                    alt="{{ __('locale.image')}}">
                <div class="brand-text"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}"
                        alt="{{ __('locale.image')}}"></div>
            </a>

                <h3 class="title">{{ __(@$login->data_values->heading) }}</h3>
              </div>
              <div class="form-group">
                <label for="login-email" class="form-label">Email / Username</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror @error('username') is-invalid @enderror" id="login-email" name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus value="{{ old('email') }}" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-label" for="login-password">Password</label>
                
                <input type="password" class="form-control form-control-merge" id="login-password" name="password"
                  tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="login-password" autocomplete="current-password" />

              </div>

              <div class="form-group">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  @lang('Remember Me')
                </label>
              </div>

              <button type="submit" class="btn btn--base w-100">@lang('Login Now')</button>
              <p class="text-center mt-3"><span class="text-white">@lang('New to') {{ $general->sitename }}?</span> <a href="{{ route('register') }}" class="text--base">@lang('Signup here').</a>
              </p>
              <p class="text-center">@lang('or')
              @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text--base">
                    <small>Forgot Password?</small>
                  </a>
                @endif
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection