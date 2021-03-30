@extends('template')

@section('title', 'Tambah Siswa')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Siswa</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('siswa/'.$siswa->id.'/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nisn" class="controllabel">NISN</label>
                <input name="nisn" type="text" class="form-control" value="{{$siswa->nisn}}">
            </div>
						<div class="form-group">
                <label for="nis" class="controllabel">NIS</label>
                <input name="nis" type="text" class="form-control" value="{{$siswa->nis}}">
            </div>
						<div class="form-group">
                <label for="nama" class="controllabel">Nama Siswa</label>
                <input name="nama" type="text" class="form-control" value="{{$siswa->nama}}">
            </div>
						<div class="form-group">
                <label for="id_kelas" class="controllabel">Kelas</label>
                @if(!empty($kelas))
                <select class="form-control" name="id_kelas">
                    @foreach ($kelas as $k)
                    <option value="{{$k->id}}" style="color: #000;">{{$k->nama_kelas}}</option>
                    @endforeach
                    <?php $variabel ?>
                </select>
                    @else
                    <p>Tidak ada kelas</p>
                    @endif
            </div>
            <div class="form-group">
                <label for="alamat" class="controllabel">Alamat</label>
                <input name="alamat" type="text" class="form-control" value="{{$siswa->alamat}}">
            </div>
            <div class="form-group">
                <label for="no_telp" class="controllabel">No Telp</label>
                <input name="no_telp" type="text" class="form-control" value="{{$siswa->no_telp}}">
            </div>
						<div class="form-group">
              <label for="foto" class="control-label">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
						<div class="form-group">
                <label for="id_spp" class="controllabel">SPP</label>
                @if(!empty($spp))
                <select class="form-control" name="id_spp">
                    @foreach ($spp as $s)
                    <option value="{{$s->id}}">{{ 'Tahun '.$s->tahun.' - '.'Rp.'.$s->nominal }}</option>
                    @endforeach
                    <?php $variabel ?>
                </select>
                    @else
                    <p>Tidak ada kelas</p>
                    @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection
