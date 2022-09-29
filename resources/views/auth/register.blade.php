<?php
$info = json_decode(json_encode(getIpInfo()), true);
$country_code = @implode(',', $info['code']);
?>
@extends('layouts.blankMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')


<section class="account-section bg_img" style="background-image: url('{{ getImage( 'assets/images/frontend/register/' .@$register->data_values->background_image, '1920x1010') }}');">
    <div class="account-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="account-wrapper">
                        <form class="account-form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="account-thumb-area text-center">
                                <a href="#" class="col d-flex justify-content-center mb-1">
                                    <img style="height:50px;" src="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" alt="{{ __('locale.image')}}">
                                    <div class="brand-text"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="{{ __('locale.image')}}"></div>
                                </a>
                                <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
                                <p class="card-text mb-2">Register to access the trading platform!</p>
                            </div>
                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <label for="firstname" class="col-md-12 col-form-label text-md-right">Username*</label>
                                    <input id="register-username" placeholder="johndoe" type="text" class="form-control @error('username') is-invalid @enderror" name="username" tabindex="1" value="{{ old('username') }}" aria-describedby="register-username" autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="register-email" class="col-md-12 col-form-label text-md-right">Email*</label>
                                    <input id="register-email" placeholder="john@example.com" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="register-email" tabindex="2">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="register-password" class="col-md-12 col-form-label text-md-right">Password*</label>
                                    <input id="register-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="register-password-confirm" class="col-md-12 col-form-label text-md-right">Confirm Password*</label>
                                    <input id="register-password-confirm" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}">

                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="firstname" class="col-md-12 col-form-label text-md-right">First Name</label>
                                    <input id="firstname" placeholder="johndoe" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" tabindex="4" value="{{ old('firstname') }}" aria-describedby="register-firstname" autofocus>
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="lastname" class="col-md-12 col-form-label text-md-right">Last Name</label>
                                    <input id="lastname" placeholder="johndoe" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" tabindex="5" value="{{ old('lastname') }}" aria-describedby="register-lastname" autofocus>
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="mobile" class="col-md-12 col-form-label text-md-right">Mobile number*</label>

                                    <div class="form-group country-code mb-0">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <select name="country_code" class="select">
                                                        @include('partials.country_code')
                                                    </select>
                                                </span>
                                            </div>
                                            <input type="text" name="mobile" class="form-control" tabindex="6" placeholder="@lang('Phone Number')">
                                        </div>
                                    </div>
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="country" class="col-md-12 col-form-label text-md-right">Country*</label>
                                    <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="Country" aria-describedby="country" tabindex="7" value="{{ old('country') }}">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="address" class="col-md-12 col-form-label text-md-right">Address</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" aria-describedby="address" tabindex="8" autofocus value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="town" class="col-md-12 col-form-label text-md-right">Town</label>
                                    <input type="text" name="town" class="form-control @error('town') is-invalid @enderror" placeholder="Town" aria-describedby="town" tabindex="9" autofocus value="{{ old('town') }}">
                                    @error('town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-8 form-group">
                                    <label for="city" class="col-md-12 col-form-label text-md-right">City</label>
                                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="City" aria-describedby="city" tabindex="10" autofocus value="{{ old('city') }}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="zip" class="col-md-12 col-form-label text-md-right">Zip code</label>
                                    <input type="text" name="zip" class="form-control @error('zip') is-invalid @enderror" placeholder="Zip" aria-describedby="zip" tabindex="11" autofocus value="{{ old('zip') }}">
                                    @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                @if(session()->get('reference') != null)
                                <div class="col-md-12 form-group">
                                    <label for="reference" class="col-md-12 col-form-label text-md-right">Reference By</label>
                                    <input id="multiStepsreferenceBy" type="text" id="reference" class="form-control" name="multiStepsreferBy" aria-describedby="referenceBy" value="{{session()->get('reference')}}" autofocus readonly>
                                </div>
                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="col-md-12 form-group">
                                    <input type="checkbox" id="terms" name="terms" tabindex="12" />
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="{{ route('terms.show') }}" class="text--base" target="_blank">Terms of Service</a> and
                                        <a href="{{ route('policy.show') }}" class="text--base" target="_blank">Privacy Policy</a>
                                    </label>
                                </div>
                                @endif

                                <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn--base w-100">@lang('Registration Now')</button>
                                </div>
                                <div class="col-md-12 text-end">
                                    <p class="text-white text-center">Already have an account? <a href="{{ route('login') }}" class="text--base">@lang('Login here').</a></p>

                                </div>
                            </div><!-- row end -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
    "use strict";
    @if($country_code)
    $(`option[data-code={{ $country_code }}]`).attr('selected', '');
    @endif
    $('select[name=country_code]').change(function() {
        $('input[name=country]').val($('select[name=country_code] :selected').data('country'));
    }).change();
</script>
@endpush