@extends('template')

@section('title', 'Petugas Database')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database User</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('petugas/create')}}" role="button"> Tambah Data Petugas</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($petugas_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Nama petugas</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($petugas_list as $petugas)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $petugas->username }}</td>
				<td>{{ $petugas->nama_petugas }}</td>
				<td>{{ $petugas->level }}</td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('petugas/' . $petugas->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('petugas/' . $petugas->id . '/delete') }}"> Delete</a>
          <a class="lnr lnr-enter btn btn-warning btn-md" href="{{ url('petugas/' . $petugas->id) }}"> Detail</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
