@extends('template')

@section('title', 'Edit Pembayaran')

@section('content')
<div class="panel">
<div class="panel-heading">
		<h3 class="panel-title">Edit Pembayaran</h3>
		<div class="right">
		<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
		</div>
	</div>
	<div class="panel-body">
        <form action="{{ url('pembayaran/'.$pembayaran->id.'/update') }}" method="post">
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
                <label for="id_siswa" class="controllabel">NISN</label>
                @if(!empty($siswa))
                <select class="form-control" name="id_siswa">
                    @foreach ($siswa as $a)
                    <option value="{{$a->id}}">{{$a->nama}}</option>
                    @endforeach
                    <?php $variabel ?>
                </select>
                    @else
                    <p>Tidak ada siswa</p>
                    @endif
            </div>
            <div class="form-group">
                <label for="tgl_bayar" class="controllabel">Tanggal Pembayaran</label>
                <input name="tgl_bayar" type="date" class="form-control" value="{{$pembayaran->tgl_bayar}}">
            </div>
            <div class="form-group">
                <label for="jumlah_bayar" class="controllabel">Jumlah Bayar</label>
                <input name="jumlah_bayar" type="number" class="form-control"  value="{{$pembayaran->jumlah_bayar}}">
            </div>
            <div class="form-group">
                        <div class="input-group-prepend">
                           <label class="input-group-text">
                              SPP Bulan
                           </label>
                        </div>
                        <select class="form-control" name="spp_bulan">
                              <option value="">Silahkan Pilih</option>
                                 <option value="januari">Januari</option>
                                 <option value="februari">Februari</option>
                                 <option value="maret">Maret</option>
                                 <option value="april">April</option>
                                 <option value="mei">Mei</option>
                                 <option value="juni">Juni</option>
                                 <option value="juli">Juli</option>
                                 <option value="agustus">Agustus</option>
                                 <option value="september">September</option>
                                 <option value="oktober">Oktober</option>
                                 <option value="november">November</option>
                                 <option value="desember">Desember</option>
                       </select>
                     </div>
                     <div class="form-group">
                        <label for="id_spp" class="controllabel">Tahun</label>
                        @if(!empty($spp))
                        <select class="form-control" name="id_spp">
                            @foreach ($spp as $a)
                            <option value="{{$a->id_spp}}">{{$a->tahun}}</option>
                            @endforeach
                            <?php $variabel ?>
                        </select>
                            @endif
                    </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
