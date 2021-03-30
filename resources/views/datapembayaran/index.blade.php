@extends('template')

@section('title', 'Data Pembayaran')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Data Pembayaran Keseluruhan</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('pembayaran/create')}}" role="button"> Tambah Pembayaran</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($pembayaran_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Petugas</th>
					<th>NISN Siswa</th>
					<th>Nama Siswa</th>
					<th>Tanggal Bayar</th>
					<th>Tahun Bayar</th>
					<th>Jumlah Bayar</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($pembayaran_list as $pembayaran)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $pembayaran->users->nama_petugas }}</td>
				<td>{{ $pembayaran->siswa->nisn }}</td>
				<td>{{ $pembayaran->siswa->nama }}</td>
				<td>{{ $pembayaran->tgl_bayar }}</td>
				<td>{{ $pembayaran->siswa->spp->tahun }}</td>
				<td>{{ $pembayaran->jumlah_bayar }}</td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('pembayaran/' . $pembayaran->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('pembayaran/' . $pembayaran->id . '/delete') }}"> Delete</a>
          <a class="lnr lnr-enter btn btn-warning btn-md" href="{{ url('pembayaran/' . $pembayaran->id) }}"> Detail</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
