@extends('template')

@section('title', 'Siswa Database')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Siswa</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('siswa/create')}}" role="button"> Tambah Data Siswa</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($siswa_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nisn</th>
					<th>Nis</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Telp</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($siswa_list as $siswa)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $siswa->nisn }}</td>
				<td>{{ $siswa->nis }}</td>
				<td>{{ $siswa->nama }}</td>
				<td>{{ $siswa->alamat }}</td>
				<td>{{ $siswa->no_telp }}</td>

        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('siswa/' . $siswa->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('siswa/' . $siswa->id . '/delete') }}"> Delete</a>
          <a class="lnr lnr-enter btn btn-warning btn-md" href="{{ url('siswa/' . $siswa->id) }}"> Detail </a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p>Tidak ada data user.</p>
		@endif
</div>
@endsection
