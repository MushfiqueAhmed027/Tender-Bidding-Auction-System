@extends('layouts.auth')

	<div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
		<!--begin::Head-->
		@section('content')
		<h2>Registration</h2>
		<!--end::Head-->

		<!--begin::Body-->
		<div class="m-login__body">
            
            <div class="m-login__signin">

				<!--begin::Form-->
                <form class="m-login__form m-form"  method="POST" action="{{ route('register') }}">
                    @csrf
					<div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
					</div>
					<div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Select Type') }}</label>
                        <div class="col-md-8">
                            <select class="form-control" name="type">
                                <option value="">Please Select One</option>
                                <option value="Tender">Tenderer</option>
                                <option value="Bidder">Bidder</option>
                            </select>
                        </div>
                    </div>
					<div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                           
                        </div>
                        
                    </div>
				</form>
				<!--end::Form-->
				<!--begin::Action-->

<!--end::Action-->
<!--begin::Divider-->

<!--end::Divider-->

<!--begin::Options-->

<!--end::Options-->
</div>
<!--end::Signin-->
        @stop
        
    </div>
        
	</div>
	
</div>


				 	 				
		
