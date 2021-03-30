<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class kelascontroller extends Controller
{
  public function __construct(){
        $this->middleware([
           'cek_login'
        ]);
   }

  public function kelas()
  {

      $halaman = 'kelas';
      $kelas_list = Kelas::all();
      return view('datakelas.index', compact('halaman', 'kelas_list'));
  }

  public function create()
  {
      $halaman = 'kelas';
      return view('datakelas.create', compact('halaman'));
  }

  public function store(Request $request)
  {
      Kelas::create([
          'nama_kelas'=>$request->nama_kelas,
          'kompetensi_keahlian'=>$request->kompetensi_keahlian
      ]);
      return redirect('kelas');
  }

  public function show($id)
  {
      $halaman = 'kelas';
      $kelas = Kelas::findOrFail($id);
      return view('datakelas.show', compact('halaman', 'kelas'));
  }

  public function edit($id)
  {
      $halaman = 'kelas';
      $kelas = Kelas::findOrFail($id);
      return view('datakelas.edit', compact('halaman', 'kelas'));
  }

  public function update($id, Request $request)
  {
      $halaman = 'kelas';
      $kelas = Kelas::findOrFail($id);
      $kelas->nama_kelas = $request->nama_kelas;
      $kelas->kompetensi_keahlian = $request->kompetensi_keahlian;
      $kelas->save();
      return redirect('kelas');
  }

  public function delete($id)
  {
      $kelas = Kelas::findOrFail($id);
      $kelas->delete();
      return redirect('kelas');
  }
}
