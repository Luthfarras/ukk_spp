<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Users;
use App\Siswa;
use Session;
use DB;

class historycontroller extends Controller
{
  public function __construct(){
    $this->middleware('cek_login');
  }

  public function index()
  {
     $siswa = Siswa::all();
     $pembayaran = DB::table('pembayaran')->join('users','pembayaran.id_petugas','users.id')
            ->join('siswa','siswa.id','pembayaran.id_siswa')
            ->join('spp','spp.id','siswa.id_spp')
            ->join('kelas','kelas.id','siswa.id_kelas')
            ->select('siswa.nama','kelas.nama_kelas','pembayaran.spp_bulan','spp.nominal','pembayaran.jumlah_bayar','pembayaran.tunggakan','pembayaran.created_at')
            ->get();
       return view('historybayar.index', compact('pembayaran', 'siswa'));
  }
}
