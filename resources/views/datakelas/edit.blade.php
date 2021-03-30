@extends('template')

@section('title', 'Edit User')

@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Kelas</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('kelas/'.$kelas->id.'/update') }}" method="post">
            @csrf
            <div class="form-group">
			<h4>Nama kelas</h4>
				<input name="nama_kelas" type="text"  class="form-control" value="{{$kelas->nama_kelas}}" required>
            </div>
			<div class="form-group">
                        <div class="input-group-prepend">
                           <label class="input-group-text">
                              Kompetensi Keahlian
                           </label>
                        </div>
                        <select class="form-control" name="kompetensi_keahlian" value="{{$kelas->kompetensi_keahlian}}" required>
                                 <option value="Rekayasa Perangkat Lunak" style="color: #000;">Rekayasa Perangkat Lunak</option>
                                 <option value="Teknik Komputer & Jaringan" style="color: #000;">Teknik Komputer & Jaringan</option>
                       </select>
             </div>
            <div class="text-center">
				<button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>

@endsection
