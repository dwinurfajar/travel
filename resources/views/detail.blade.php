@extends('layouts.header')

@section('title', 'Detail')

@section('container')
<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Detail Tiket</h3>
						<table class="table">
							<caption>Detail Tiket</caption>
							<thead>
								<tr>
								<th scope="col">#</th>
								<th scope="col">Kelas</th>
								<th scope="col">Asal</th>
								<th scope="col">Tujuan</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Jam</th>
								<th scope="col">No Kursi</th>
								<th scope="col">No Telepon</th>
								<th scope="col">Total (Rp)</th>
								
								</tr>
							</thead>
							<tbody>
								@foreach ($detail as $dtl)
									<tr>
									<th scope="row">{{ $loop->iteration}}</th>
									<td>{{ $dtl->kelas}}</td>
									<td>{{ $dtl->asal}}</td>
									<td>{{ $dtl->tujuan}}</td>
									<td>{{ $dtl->tanggal}}</td>
									<td>{{ $dtl->jam}}</td>
									<td>{{ $dtl->no_kursi}}</td>
									<td>{{ $dtl->no_telepon}}</td>
									<td>{{ $dtl->total}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
@endsection
