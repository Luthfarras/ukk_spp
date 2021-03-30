<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Siswa;
use App\Kelas;
use App\Pembayaran;
use App;
use PDF;

class laporancontroller extends Controller
{
  // public function __construct(){
  //   $this->middleware('cek_login');
  // }


  public function index(){

     $data = [
        // 'user' => User::find(auth()->user()->id),
        'kelas' => Kelas::orderBy('nama_kelas', 'ASC')->get(),
      ];

      return view('laporan.index', $data);
  }

  public function create(){

      PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

    $data = [
        'pembayaran' => Pembayaran::orderBy('created_at', 'DESC')->get()
      ];

      $pdf = PDF::loadView('laporan.laporan', $data);
      return $pdf->download('laporan-spp.pdf');
  }

  public function buat(){

      PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

      $data = [
          'pembayaran' => Pembayaran::where('id_siswa', Session::get('id'))->paginate(10)
      ];

      $pdf = PDF::loadView('laporan.laporan', $data);
      return $pdf->download('laporan-spp-siswa.pdf');
  }



}
