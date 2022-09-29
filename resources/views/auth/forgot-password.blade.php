@extends('layouts.blankMaster')

@section('title', 'Forgot Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
   
<section class="account-section bg_img" style="background-image: url(' {{ getImage( 'assets/images/frontend/ac_recovery/' .@$recovery->data_values->background_image, '1920x1010') }} ');">
    <div class="account-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="account-wrapper">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

              <form class="account-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="account-thumb-area text-center">
                   <a href="{{ route('home') }}" class="account-wrapper-logo">
                    <img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="image">
                  </a>
                </div>
                <div class="form-group">
                  <label>@lang('Email') *</label>
                  <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" required placeholder="@lang('Enter email address')">
                </div>
                <button type="submit" class="btn btn--base w-100">Send reset link</button>
                <p class="text-end mt-3"><a href="{{ route('login') }}" class="text--base">@lang('Login Here')</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
