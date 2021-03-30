@extends('template')

@section('title', 'Tambah Kelas')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Kelas</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('kelas/store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_kelas" class="controllabel">Nama Kelas</label>
                <input name="nama_kelas" type="text" class="form-control">
            </div>
            <div class="form-group">
							<select class="form-control" name="kompetensi_keahlian" required>
											 <option value="Rekayasa Perangkat Lunak" style="color: #000;">Rekayasa Perangkat Lunak</option>
											 <option value="Teknik Komputer & Jaringan" style="color: #000;">Teknik Komputer & Jaringan</option>
						 </select>
             </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection
