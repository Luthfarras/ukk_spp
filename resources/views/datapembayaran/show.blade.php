@extends('template')

@section('title', 'Rincian data pembayaran')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Rincian data pembayaran</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('pembayaran/update') }}" method="post">
            @csrf
<table class="table">
<tr>
    <th>ID Pembayaran</th>
    <td>{{ $pembayaran->id_pembayaran }}</td>
</tr>

<tr>
    <th>ID Petugas</th>
    <td>{{ $pembayaran->id_petugas }}</td>
</tr>

<tr>
    <th>NISN</th>
    <td>{{ $pembayaran->siswa->nisn}}</td>
</tr>

<tr>
    <th>Tanggal Pembayaran</th>
    <td>{{ $pembayaran->tgl_bayar }}</td>
</tr>

<tr>
    <th>Jumlah Bayar</th>
    <td>{{ $pembayaran->jumlah_bayar }}</td>
</tr>

<!-- <tr>
    <th>ID SPP</th>
    <td>{{ $pembayaran->id_spp }}</td>
</tr> -->

</table>
        </form>
    </div>
</div>

@endsection
