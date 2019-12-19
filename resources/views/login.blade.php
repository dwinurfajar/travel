@extends('layouts.header')

@section('title', 'login')

@section('container')
	<!--================Login Box Area =================-->
		<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Log In</h3>
						<form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
							</div>
						</form>
						<form class="row login_form" action="daftar" id="contactForm" novalidate="novalidate">
						<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">daftar</button>
								<a href="#">Forgot Password?</a>
						</form>	
					</div>
				</div>
			</div>
		</div>
	<!--================End Login Box Area =================-->
@endsection