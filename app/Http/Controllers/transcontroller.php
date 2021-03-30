<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Spp;
use App\Siswa;
use App\Kelas;
use App\Users;
use Session;

class transcontroller extends Controller
{
  public function __construct(){
    $this->middleware('cek_login');
  }

  public function pembayaran()
  {

      $halaman = 'pembayaran';
      $pembayaran_list = Pembayaran::all();
      return view('datapembayaran.index', compact('halaman', 'pembayaran_list'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $halaman = 'data';
      $petugas = Users::all();
      $kelas = Kelas::all();
      $siswa = Siswa::all();
      $spp = Spp::all();
      return view('datapembayaran.create', compact('halaman','petugas','kelas', 'siswa', 'spp'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $nominal = Siswa::where('id',$request->id_siswa)->first();
    $tunggakan = $nominal->tunggakan - $request->jumlah_bayar;
    $save = Siswa::where('id',$request->id_siswa)->update([
    'tunggakan' => $tunggakan
    ]);
    $newnominal = Siswa::where('id',$request->id_siswa)->first();
      Pembayaran::create([
          'id_petugas'=>Session::get('id'),
          'id_siswa'=>$request->id_siswa,
          'tgl_bayar'=>$request->tgl_bayar,
          'spp_bulan'=>$request->spp_bulan,
          'jumlah_bayar'=>$request->jumlah_bayar,
          'tunggakan'=>$newnominal->tunggakan
      ]);
      return redirect('pembayaran');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $halaman = 'pembayaran';
      $pembayaran = Pembayaran::findOrFail($id);
      return view('datapembayaran.show', compact('halaman', 'pembayaran'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $halaman = 'pembayaran';
      $petugas = Users::all();
      $kelas = Kelas::all();
      $siswa = Siswa::all();
      $spp = Spp::all();
      $pembayaran = Pembayaran::findOrFail($id);
      return view('datapembayaran.edit', compact('halaman', 'pembayaran', 'petugas','kelas', 'siswa', 'spp'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $halaman = 'pembayaran';
      $pembayaran = Pembayaran::findOrFail($id);
      $pembayaran->id_petugas=Session::get('id');
      $pembayaran->id_siswa=$request->id_siswa;
      $pembayaran->tgl_bayar=$request->tgl_bayar;
      $pembayaran->spp_bulan=$request->spp_bulan;
      $pembayaran->jumlah_bayar=$request->jumlah_bayar;
      $pembayaran->save();
      return redirect('pembayaran');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
      $pembayaran = Pembayaran::findOrFail($id);
      $pembayaran->delete();
      return redirect('pembayaran');
  }
}
