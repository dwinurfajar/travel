@extends('layouts.header')

@section('title', 'daftar')

@section('container')
<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Daftar</h3>
                        <form class="row login_form" action="/daftar" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'">
                            </div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="no_telepon" name="name" placeholder="No Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = ''">
                            </div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="konfirmasi_password" name="name" placeholder="Konfirmasi Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password'">
                            </div>
                            <div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn primary-btn">daftar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection