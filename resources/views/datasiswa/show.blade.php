@extends('template')

@section('title', 'Rincian data petugas')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Rincian Data Siswa</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('siswa/update') }}" method="post">
            @csrf
<table class="table">
            <tr>
<th>NISN</th>
<td>{{ $siswa->nisn }}</td>
</tr>

<tr>
<th>NIS</th>
<td>{{ $siswa->nis }}</td>
</tr>

<tr>
<th>Nama Siswa</th>
<td>{{ $siswa->nama}}</td>
</tr>

<tr>
<th>Alamat</th>
<td>{{ $siswa->alamat }}</td>
</tr>

<tr>
<th>No Telp</th>
<td>{{ $siswa->no_telp }}</td>
</tr>

<tr>
	<th>Image</th>
	<td><img src="{{ asset('images/'.$siswa->foto) }}" style= "width:200px"></td>
</tr>
</table>
        </form>
    </div>
</div>

@endsection
