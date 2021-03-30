@extends('template')

@section('title', 'History Database')

@section('content')

<div class="col-md-12">
  <div class="card card-plain">
    <div class="card-header card-header-primary">
      <h4 class="card-title mt-0">History Pembayaran</h4>
      <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
    			<thead>
    				<tr>
              <th>No</th>
              <th>Tanggal Bayar</th>
              <th>Nama Siswa</th>
              <th>Bulan Bayar</th>
              <th>Nominal SPP</th>
              <th>Jumlah Bayar</th>
              <th>Tunggakan</th>
              <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
            @php $i=1 @endphp
            @foreach($pembayaran as $value)

    				<tr>
    				<th>{{ $i++ }}</th>
    				<td>{{ $value->created_at }}</td>
    				<td>{{ $value->nama .' - '. $value->nama_kelas }}</td>
    				<td>{{ $value->spp_bulan }}</td>
    				<td>Nominal SPP Rp.{{ $spp = $value->nominal }}</td>
    				<td>Bayar Rp.{{ $bayar = $value->jumlah_bayar }}</td>
            <td>Tunggakan Rp.{{ $value->tunggakan}}</td>
            <td><a class="lnr lnr-pencil btn btn-success btn-md" href="">Cetak</td>
           </tr>
    				@endforeach
    			</tbody>
    		</table>
      </div>
    </div>
  </div>
</div>

                  @if(count($pembayaran) == 0)
                      <div class="text-center">Tidak ada histori pembayaran</div>
                  @endif

            </div>
         </div>

      </div>
   </div>

@endsection
