@extends('layouts.auth')



	<div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
		<!--begin::Head-->
		@section('content')
		<div class="m-login__head">
			<span>Don't have an account?</span>
			<a href="{{route('register')}}" class="m-link m--font-danger">Sign Up</a>
		</div>
		<!--end::Head-->

		<!--begin::Body-->
		<div class="m-login__body">

			<!--begin::Signin-->
			<div class="m-login__signin">
				<div class="m-login__title">
					<h3>Create Account</h3>
				</div>

				<!--begin::Form-->
				<form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
						<div class="col-md-8">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6 offset-md-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="form-check-label" for="remember">
									{{ __('Remember Me') }}
								</label>
							</div>
						</div>
					</div>
					<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Login') }}
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


				 	 				
		
