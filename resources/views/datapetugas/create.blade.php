@extends('template')

@section('title', 'Tambah Petugas')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Petugas</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('petugas') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_petugas" class="controllabel">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="username" class="controllabel">Username</label>
                <input name="username" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="password" class="controllabel">Password</label>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="form-group">
            <h4>Hak akses</h4>
            <input type="radio" name="level" value="admin" checked="checked">Admin <br>
            <!-- <input type="radio" name="level" value="siswa">Siswa<br> -->
            <input type="radio" name="level" value="petugas">Petugas<br>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection
