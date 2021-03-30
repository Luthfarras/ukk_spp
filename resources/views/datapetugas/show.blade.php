@extends('template')

@section('title', 'Rincian data petugas')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Rincian data petugas</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('petugas/update') }}" method="post">
            @csrf
<table class="table">
            <tr>
<th>Nama</th>
<td>{{ $petugas->nama_petugas }}</td>
</tr>

<tr>
<th>Username</th>
<td>{{ $petugas->username }}</td>
</tr>

<tr>
<th>Password</th>
<td>{{ $petugas->password}}</td>
</tr>

<tr>
<th>Level</th>
<td>{{ $petugas->level }}</td>
</tr>

</table>
        </form>
    </div>
</div>

@endsection