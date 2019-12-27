@extends('layouts.header')

@section('title', 'detail')

@section('container')
<div class="container">
				<div class="col-lg-20">
					<div class="login_form_inner">
						<h3 class="mt-5">Detail Tiket</h3>
						<table class="table">
							<caption>detail pesanan</caption>
							<thead>
								<tr>
								<th scope="col">#</th>
								<th scope="col">kelas</th>
								<th scope="col">asal</th>
								<th scope="col">tujuan</th>
								<th scope="col">no telepon</th>
								<th scope="col">Tanggal</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($detail as $dtl)
									<tr>
									<th scope="row">{{ $loop->iteration}}</th>
									<td>{{ $dtl->kelas}}</td>
									<td>{{ $dtl->asal}}</td>
									<td>{{ $dtl->tujuan}}</td>
									<td>{{ $dtl->no_telepon}}</td>
									<td>{{ $dtl->tanggal}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
@endsection
