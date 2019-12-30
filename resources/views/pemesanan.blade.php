@extends('layouts/header')

@section('title', 'Pesan')


@section('container')   

<div class="container">
                <div class="col-lg-20">
                    <div class="login_form_inner">
                        <h3 class="mt-5">Pesan</h3>
                        <form class="row login_form" action="/pemesanan/store" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="input-group mb-3">
                                <label class="input-group" for="kelas">Pilih Class</label>
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="kelas">Kelas</label>
                                </div>
                                <select class="input-group @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}" onchange="myFunction()" required>
                                    <option selected>Pilih Kelas</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Executive">Executive</option>
                                </select>
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <script type="text/javascript">
                                function myFunction() {
                                    var x = document.getElementById("kelas").value;
                                    var y = document.getElementById("jumlah").value;
                                    if(x == "Ekonomi"){
                                            document.getElementById("total").value = 50000*y;
                                        }else if(x == "Bisnis"){
                                            document.getElementById("total").value = 100000*y;
                                        }else if(x == "Executive"){
                                            document.getElementById("total").value = 150000*y;
                                        }
                                }
                            </script>

                            <div class="input-group mb-3">
                                <label class="input-group" for="asal">Pilih Kota</label>
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="asal">Asal</label>
                                </div>
                                <select id="asal" name="asal" required>
                                    <option selected>Kota</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                </select>
                                <div lass="input-group-prepend">
                                    <h1></h1>
                                </div>

                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="tujuan">Tujuan</label>
                                </div>
                                <select id="tujuan" name="tujuan" required>
                                    <option selected>Kota</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Surabaya">Surabaya</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                </select>
                            </div>
                            
                            <div class="input-group mb-3">
                                <label class="input-group" for="jam">Jam Keberangkatan</label>
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="jam">Jam</label>
                                </div>
                                <select class="input-group-prepend" id="jam" name="jam" required>
                                    <option selected>Jam</option>
                                    <option value=7:00:00>07.00 WIB</option>
                                    <option value=9:00:00>09.00 WIB</option>
                                    <option value=15:00:00>15.00 WIB</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group" for="jam">Jumlah Orang</label>
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="jumlah">Jumlah</label>
                                </div>
                                <select class="input-group-prepend" id="jumlah" name="jumlah" onchange="myFunction()" required>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                    <option value=3>3</option>
                                </select>
                            </div>
                        
                            <div class="input-group mb-3">
                                <label class="input-group" for="jam">No Telephone</label>
                                <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon" required>
                                @error('no_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <label class="input-group" for="jam">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required>
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group" for="jam">Total (Rp)</label>
                                <input type="number" class="form-control" id="total" name="total" placeholder="Total" readonly>
                                @error('total')
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
