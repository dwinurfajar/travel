@extends('layouts.header')

@section('title', 'daftar')

@section('container')
<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Pesan</h3>
                        <form class="row login_form" action="/pemesanan/store" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="kelas">Kelas</label>
                                </div>
                                <select class="custom-select" id="kelas" name="kelas" required>
                                    <option selected>Pilih Kelas</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Bisnis">Bisnis</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="asal">Asal</label>
                                </div>
                                <select class="custom-select" id="asal" name="asal" required>
                                    <option selected>Kota</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                </select>
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="tujuan">Tujuan</label>
                                </div>
                                <select class="custom-select" id="tujuan" name="tujuan" required>
                                    <option selected>Kota</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                </select>
                            </div>
                            
                        
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required>
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required>
                                @error('tanggal')
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
		
@endsection
