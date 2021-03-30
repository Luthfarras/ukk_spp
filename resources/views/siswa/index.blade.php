@extends('template2')

@section('title', 'History Siswa')

@section('content')

  <!-- <div class="alert alert-success text-center"><b>Selamat Datang</b> di aplikasi pembayaran SPP Sekolah</div> -->

   <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title-justify" align = "center"><b>History</b> Pembayaran Siswa</h3>
        </div>
        <div class="panel-body">
          <!--  Row -->
          @foreach($pembayaran as $history)
          <div class="d-flex flex-row comment-row">
            <i class="mdi mdi-account display-3"></i>
              <div class="comment-text active w-100">
              <hr>
              <h3>{{ $history->siswa->nama }}</h3>
                <span class="m-b-15 d-block">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Kelas {{ $history->siswa->kelas->nama_kelas }}</li>
                    <li class="list-group-item">Jumlah Bayar Rp.{{ $history->jumlah_bayar }}</li>
                    <li class="list-group-item">SPP Bulan <b class="text-capitalize text-bold">{{ $history->spp_bulan }}</b></li>
                    <li class="list-group-item">Tunggakan {{ $history->siswa->tunggakan }}</li>
                  </ul>
                </span>
                <div class="comment-footer ">
                  <span class="text-muted float-right">{{ $history->created_at }}</span>
                  <span class="action-icons active">
                    <a href="{{ url('dashboard/pembayaran/'. $history->id .'/edit') }}"><i class="ti-pencil-alt"></i></a>
                  </span>
                </div>
              </div>
            </div>
            @endforeach

                          <!-- Pagination -->
					@if($pembayaran->lastPage() != 1)
						<div class="btn-group float-right mt-4">
						   <a href="{{ $pembayaran->previousPageUrl() }}" class="btn btn-success">
								<i class="mdi mdi-chevron-left"></i>
						    </a>
						    @for($i = 1; $i <= $pembayaran->lastPage(); $i++)
								<a class="btn btn-success {{ $i == $pembayaran->currentPage() ? 'active' : '' }}" href="{{ $pembayaran->url($i) }}">{{ $i }}</a>
						    @endfor
					        <a href="{{ $pembayaran->nextPageUrl() }}" class="btn btn-success">
								<i class="mdi mdi-chevron-right"></i>
							</a>
					   </div>
					@endif
					<!-- End Pagination -->

                                @if(count($pembayaran) == 0)
				  			   <div class="text-center">Tidak ada histori!</div>
					         @endif



        </div>
      </div>
    </div>
   </div>

@endsection
