@extends('template')

@section('title', 'Edit User')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit User</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('petugas/'.$petugas->id.'/update') }}" method="post">
            @csrf
            <div class="form-group">
			<h4>Nama petugas</h4>
				<input name="nama_petugas" type="text"  class="form-control" placeholder="Nama petugas" value="{{$petugas->nama_petugas}}" required>
            </div>
			<div class="form-group">
			<h4>Username</h4>
				<input name="username" type="text"  class="form-control" placeholder="Username" value="{{$petugas->username}}" required>
			</div>
			<div class="form-group">
			<h4>Password</h4>
				<input name="password" type="password" class="form-control" placeholder="Password" required>
            </div>
			<div class="form-group">
			<h4>Hak akses</h4>
			<select name="level"  class="form-control">
			   <option value="admin" class="form-control">Admin</option>
			   <option value="petugas" class="form-control" selected="selected">Petugas</option>
			   <!-- <option value="siswa" class="form-control">Siswa</option> -->
		   </select>
</div>
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection
