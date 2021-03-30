@extends('template')

@section('title', 'Kelas Database')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Database Kelas</h3>
		<div class="right">
		<a class=" btn btn-primary" href="{{url ('kelas/create')}}" role="button"> Tambah Data Kelas</a>
		</div>
	</div>
	<div class="panel-body">
	@if (!empty($kelas_list))
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kelas</th>
					<th>Kompetensi Keahlian</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@php $i=1 @endphp
			@foreach($kelas_list as $kelas)
				<tr>
				<th>{{ $i++ }}</th>
				<td>{{ $kelas->nama_kelas }}</td>
				<td>{{ $kelas->kompetensi_keahlian }}</td>
        <td><a class="lnr lnr-pencil btn btn-success btn-md" href="{{ url('kelas/' . $kelas->id . '/edit') }}"> Edit</a>
          <a class="lnr lnr-trash btn btn-danger btn-md" href="{{ url('kelas/' . $kelas->id . '/delete') }}"> Delete</a>
          <!-- <a class="lnr lnr-enter btn btn-warning btn-md" href="{{ url('kelas/' . $kelas->id) }}"> Detail</a></td> -->
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
</div>
@endsection
