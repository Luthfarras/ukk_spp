@extends('template')

@section('title', 'Laporan')

@section('content')

   <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Generate Laporan</h3>
          </div>
          <div class="panel-body">
            <div class="card">
              <div class="card-body">
                <div class="card-title"> Buat Laporan</div>
                  <div class="alert alert-success">Buat rekap laporan pembayaran SPP seluruh siswa.</div>
                  <a href="{{ url('laporan/create') }}" class="btn btn-primary btn-rounded">Buat Laporan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
