@extends('layouts.header')

@section('title', 'daftar')

@section('container')
<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Pesan</h3>
                        <form class="row login_form" action="{{ route('register') }}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" required>
                                    <option selected>Pilih Kelas</option>
                                    <option value="1">Ekonomi</option>
                                    <option value="2">Bisnis</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Asal</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" required>
                                    <option selected>Kota</option>
                                    <option value="1">Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Banyuwangi</option>
                                </select>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="tujuan">Tujuan</label>
                                </div>
                                <select class="custom-select" id="tujuan" required>
                                    <option selected>Kota</option>
                                    <option value="1">Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Banyuwangi</option>
                                </select>
                            </div>
                            
                        
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = ''">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn primary-btn">{{ __('Pesan') }}</button>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
