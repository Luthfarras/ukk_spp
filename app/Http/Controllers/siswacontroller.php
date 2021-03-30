<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Spp;

class siswacontroller extends Controller
{
  public function __construct(){
    $this->middleware('cek_login');
  }

  public function siswa()
  {

      $halaman = 'siswa';
      $siswa_list = Siswa::all();
      return view('datasiswa.index', compact('halaman', 'siswa_list'));
  }

  public function create()
  {
      $halaman = 'siswa';
      $kelas = Kelas::all();
      $spp = Spp::all();
      return view('datasiswa.create', compact('halaman', 'kelas', 'spp'));
  }

  public function store(Request $request)
  {
    $this->validate($request,
    [
      'nisn'=>'required',
      'nis'=>'required',
      'nama'=>'required',
      'id_kelas'=>'required',
      'alamat'=>'required',
      'no_telp'=>'required',
      'foto'=>'required',
      'id_spp'=>'required'
    ]
  );
  $foto = $request->file('foto');
        $name_file = time()."_".$foto->getClientOriginalName();
        $tujuan_upload = 'images';
        $foto->move($tujuan_upload, $name_file);
        $tunggakan = Spp::where('id',$request->id_spp)->first();
      Siswa::create([
          'nisn'=>$request->nisn,
          'nis'=>$request->nis,
          'nama'=>$request->nama,
          'id_kelas'=> $request->id_kelas,
          'alamat'=>$request->alamat,
          'no_telp'=>$request->no_telp,
          'foto'=>$name_file,
          'id_spp'=> $request->id_spp,
          'tunggakan'=>$tunggakan->nominal
      ]);
      // if($simpan) :
      //     Alert::success('Berhasil!', 'Data Berhasil di Tambahkan');
      //  else :
      //     Alert::error('Terjadi Kesalahan!', 'Data Gagal di Tambahkan');
      //  endif;
      return redirect('siswa');
  }

  public function show($id)
  {
      $halaman = 'siswa';
      $siswa = Siswa::findOrFail($id);
      return view('datasiswa.show', compact('halaman', 'siswa'));
  }

  public function edit($id)
  {
      $halaman = 'siswa';
      $kelas = Kelas::all();
      $spp = Spp::all();
      $siswa = Siswa::findOrFail($id);
      return view('datasiswa.edit', compact('halaman', 'siswa', 'kelas', 'spp'));
  }
  public function update($id, Request $request)
  {

      // $this->validate($request,[
      //     'nisn' => 'required|string|size:4|unique:siswa, nisn'
      // ])

      $halaman = 'siswa';
      $siswa = Siswa::findOrFail($id);
      $siswa->nisn = $request->nisn;
      $siswa->nis = $request->nis;
      $siswa->nama = $request->nama;
      $siswa->alamat = $request->alamat;
      $siswa->no_telp = $request->no_telp;
      $siswa->foto = $request->foto;
    if($request->hasFile('foto')){
      $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
      $siswa->foto = $request->file('foto')->getClientOriginalName();
    $siswa->save();
  }

      $siswa->save();
      return redirect('siswa');
  }
  public function delete($id)
  {
      $siswa = Siswa::findOrFail($id);
      $siswa->delete();
      return redirect('siswa');
  }
}
