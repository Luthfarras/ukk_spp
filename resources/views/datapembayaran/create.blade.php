@extends('template')

@section('title', 'Tambah Pembayaran')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Tambah Pembayaran</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('pembayaran/store') }}" method="post">
            @csrf
            <!-- <div class="form-group">
                <label for="id_petugas" class="controllabel">ID Petugas</label>
                @if(!empty($petugas))
                <select class="form-control" name="id_petugas">
                    @foreach ($petugas as $a)
                    <option value="{{$a->id}}">{{$a->nama_petugas}}</option>
                    @endforeach
                    <?php $variabel ?>
                </select>
                    @else
                    <p>Tidak ada petugas</p>
                    @endif
            </div> -->
            <div class="form-group">
                <label for="id_siswa" class="controllabel">Siswa</label>
                @if(!empty($siswa))
                <select class="form-control" name="id_siswa">
                    @foreach ($siswa as $a)
                    <option value="{{$a->id}}" style="color: #000;">{{$a->nama}}</option>
                    @endforeach
                    <?php $variabel ?>
                </select>
                    @else
                    <p>Tidak ada siswa</p>
                    @endif
            </div>
            <div class="form-group">
                <label for="tgl_bayar" class="controllabel">Tanggal Pembayaran</label>
                <input name="tgl_bayar" type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="jumlah_bayar" class="controllabel">Jumlah Bayar</label>
                <input name="jumlah_bayar" type="number" class="form-control">
            </div>
            <div class="form-group">
                        <div class="input-group-prepend">
                           <label class="input-group-text">
                              SPP Bulan
                           </label>
                        </div>
                        <select class="form-control" name="spp_bulan">
                              <option value="">Silahkan Pilih</option>
                                 <option value="januari" style="color: #000;">Januari</option>
                                 <option value="februari" style="color: #000;">Februari</option>
                                 <option value="maret" style="color: #000;">Maret</option>
                                 <option value="april" style="color: #000;">April</option>
                                 <option value="mei" style="color: #000;">Mei</option>
                                 <option value="juni" style="color: #000;">Juni</option>
                                 <option value="juli" style="color: #000;">Juli</option>
                                 <option value="agustus" style="color: #000;">Agustus</option>
                                 <option value="september" style="color: #000;">September</option>
                                 <option value="oktober" style="color: #000;">Oktober</option>
                                 <option value="november" style="color: #000;">November</option>
                                 <option value="desember" style="color: #000;">Desember</option>
                       </select>
                     </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
        </form>
    </div>
</div>

@endsection
