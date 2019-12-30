@extends('layouts.header')

@section('container')
	<!--================Login Box Area =================-->
		<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Log In</h3>
						<form class="row login_form" action="{{ route('login') }}" method="post" id="contactForm" novalidate="novalidate">
							@csrf
							<div class="col-md-12 form-group">
								<!--<input type="text" class="form-control" id="name" name="name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">-->
								<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<!--<input type="password" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">-->
								<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">{{ __('Login') }}</button>
								@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>

						</form>
						<form class="row login_form" action="/register" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								@if (Route::has('register'))
									<button type="submit" href="{{ route('register') }}" value="submit" class="primary-btn">{{ __('Registrasi') }}</button>
								@endif
							</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
	<!--================End Login Box Area =================-->
    @endsection